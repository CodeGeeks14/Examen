<?php
// initializ shopping cart class
include 'cart.php';
$cart = new Cart;
?>
<head>
    <title>View Cart - PHP Shopping Cart Tutorial</title>
    <meta charset="utf-8">
    <style>
    .container{padding: 50px;}
    input[type="number"]{width: 20%;}
    </style>
    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
</head>
</head>
<body>
<div class="container">
    <h1>Shopping Cart</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
				
				$date = date('Y-m-d');
				$query = "SELECT * FROM Product WHERE ActieDatum = '{$date}'";
				$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
				foreach($result as $row){
					echo $row['idProduct'];
					$query = "SELECT * FROM Product as P, Items as I WHERE I.idProduct = P.idProduct AND P.productNaam = '".$item["name"]."'";
					$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
					foreach($result as $row2){
						//echo $row['idProduct'];
						echo $row2['idProduct'];
						if($row['idProduct'] == $row2['idProduct']){
							if($cart->total_items() <= 2){
								$item['price'] = $item['price'] * 2;
								$item["subtotal"] = $item["subtotal"] * 2;
							}
						}
					}
				}
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' 
            '; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '$'.$item["subtotal"].' EUR'; ?></td>
            <td>
                <a href="index.php?content=cartAction&action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Your cart is empty.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="index.php?content=MarklinLocomotive" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
			
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' EUR'; ?></strong></td>
            <td><a href="index.php?content=checkout" class="btn btn-success btn-block">Checkout <i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
</div>
</body>
</html>