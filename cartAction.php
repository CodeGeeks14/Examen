<?php
// initialize shopping cart class
include 'cart.php';
$cart = new Cart;

// include database configuration file
include 'db_connect.php';
$connection = mysqli_connect($servername, $username, $password, $dbname);


$req = $_REQUEST['action'];

echo "".$req."";

if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
//    if($_REQUEST['action'] == 'addToCart' && $_REQUEST['id'] == 'boete') {
//        if($_REQUEST['id'] == 'boete'){
//         $itemData = array(
//            'name' => 'boete',
//             'price' => '1',
//             'qty' => 1
//         );   
//            $insertItem = $cart->insert($itemData);
//            var_dump($cart);
//            $redirectLoc = $insertItem?'viewCart.php':'index.php';
//            header("Location: ".$redirectLoc);
//            exit();
//    }
//    else
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){
        
        $productID = $_REQUEST['id'];
        // get product details
        $query_product = $connection->query("SELECT * FROM Items WHERE idItems = ".$productID);
        $row_product = $query_product->fetch_assoc();
        
        $query_finalproduct = $connection->query("SELECT * FROM Product as p, Items as it WHERE it.idItems = '{$productID}' AND it.idProduct = p.idProduct");
        $row_finalproduct = $query_finalproduct->fetch_assoc();
       // var_dump($row_video);
        //var_dump($row_finalproduct);
        
        $itemData = array(
            'id' => $row_product['idItems'],
            'name' => $row_finalproduct['ProductNaam'],
            'price' => $row_finalproduct['Prijs'],
            'qty' => 1
        );
        $insertItem = $cart->insert($itemData);
        //var_dump($cart);
        $redirectLoc = $insertItem?'viewCart.php':'index.php';
        ?> 
        <script>
            window.location = 'index.php?content=viewCart';
        </script>
        <?php
        //header("Location: ".$redirectLoc);
        exit();
        
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);?>
        <script>
            window.location = 'index.php?content=viewCart';
        </script><?php
        exit();
    }elseif($_REQUEST['action'] == 'addWensen' && !empty($_REQUEST['id'])){
        $productID = $_REQUEST['id'];
	    $insertWens = "INSERT INTO `Wensen` VALUES (NULL, {$_SESSION['id']},{$productID})";
        $result_insertWens = mysqli_query($connection, $insertWens); //or die (mysqli_error($connection));
		?><script>
						setInterval(function(){ window.location = 'index.php?content=Wensenlijst'},100);
				</script><?php
		exit();
		
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['id'])){
        // insert order details into database
        
        $insertOrder = "INSERT INTO `Order` (idOrder, idGebruiker, OrderDatum, oPrijs, Opmerking) VALUES (NULL, '".$_SESSION['id']."','".date("Y-m-d")."','".$cart->total()."', '".$_POST[opmerking]."')";
        $result_insertOrder = mysqli_query($connection, $insertOrder);
        
        if($result_insertOrder){
            $orderID = $connection->insert_id;
            // get cart items
            $cartItems = $cart->contents();
            
            //var_dump($cartItems);
            foreach($cartItems as $item){
                $sql .= "INSERT INTO `OrderRegel` VALUES (NULL, {$orderID}, {$item['id']});";
            }
//            for($i=0; $i < $cartItems; $i++){
//                $sql = "INSERT INTO `OrderRegels` VALUES ({$item['id']}, {$orderID});";
//            }
            // insert order items into database
            $insertOrderItems = $connection->multi_query($sql);
			include ("db_connect.php");
			$queryMail = "SELECT ProductNaam, OrderDatum, Prijs, idItems, image, Voornaam, Achternaam, Email, Straat, Huisnummer, Woonplaats, Postcode FROM
			`Gebruiker` as g,
			`Product` as p,
			`Order` as o,
			`OrderRegel` as os,
			`Items` as it
			WHERE p.idProduct = it.idProduct
			AND it.idItems = os.Items
			AND os.idOrder = o.idOrder
			AND g.idGebruiker = o.idGebruiker
			AND o.OrderDatum = '".date("Y-m-d")."'
			AND o.idGebruiker = '".$_SESSION["id"]."'";
			$resultMail = mysqli_query($connection, $queryMail);
            
            if($insertOrderItems){
			   $cart->destroy();
			   require("PHPMailer_5.2.0/class.phpmailer.php");

				$mail = new PHPMailer();

				$mail->IsSMTP();                                      // set mailer to use SMTP
				$mail->Host = "smtp.gmail.com";  // specify main and backup server
				$mail->Port = "465"; // SMTP Port
				$mail->SMTPAuth = true;     // turn on SMTP authentication
				$mail->SMTPSecure= "ssl"; // SMTP connection type
				$mail->Username = "testmailforo@gmail.com";  // SMTP username
				$mail->Password = "Test247nl"; // SMTP password

				$mail->From = "testmailforo@gmail.com";
				$mail->FromName = "SailTrail";
				$mail->AddAddress("olafsmid@hotmail.com", "Olaf Smid");
				$mail->AddReplyTo("olafsmid@hotmail.com", "Information");

				$mail->WordWrap = 50;                                 // set word wrap to 50 characters
				//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
				//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
				$mail->IsHTML(true);                                  // set email format to HTML
				$mail->Subject = "Bedankt voor uw bestelling";
				$mail->Body    = "<html>
                <head>
                    <style>
                        body
                        {
                            font-size:12px;
                            color: black;
                        }
                    </style>
                </head>
                <body>
				<h1><b>Bedankt voor je bestelling!</b></h1><br>
				<h3>Onderin deze email vind u de informatie</h3>
				<img style='width:669px; height:264px; margin-bottom:20px;' src='http://offringa4u.com/SailTrail/img/sailrail-78393416.jpg'><br><br>
				<table>
				<tr style='					background-color: #474747;
											border: 2px solid black;
											height: 50px;
											width: auto;
											color: white;'><h2><b>Product Details</b><br></h2><td>Product naam</td><td>Order Datum</td><td>Prijs</td><td>Afbeelding</td></tr>
			";while($row = $resultMail->fetch_assoc()){
					$mail->Body    .= "					
					
					<tr style='background-color: #EAEAEA;
							   border: 2px solid black;
							   height:220px;
							   width: auto;'><td>".$row["ProductNaam"]."</td><td>".$row["OrderDatum"]."</td><td>€".$row["Prijs"]."</td><td><img src='http://offringa4u.com/SailTrail/".$row["image"]."' height='204' width='270'></td></tr>";
					$mail->Body    .="
				</table>
				<table>
				<tr style='					background-color: #474747;
											border: 2px solid black;
											height: 50px;
											width: auto;
											color: white;'><h2><b>Verzend Gegevens</b><br></h2><td>Voornaam</td><td>Achternaam</td><td>Straat</td><td>Huisnummer</td><td>Woonplaats</td><td>Postcode</td></tr>
			";
					$mail->Body    .= "					
					
					<tr style='background-color: #EAEAEA;
							   border: 2px solid black;
							   height:60px;
							   width: auto;'><td>".$row["Voornaam"]."</td><td>".$row["Achternaam"]."</td><td>".$row["Straat"]."</td><td>".$row["Huisnummer"]."</td><td>".$row["Woonplaats"]."</td><td>".$row["Postcode"]."</td></tr>";}
					$mail->Body    .="
				</table>
				<br><h1>Heb je nog een vraag?</h1>
								Je kunt het beste contact opnemen met de verkoper: SailTrail.com.<br><Br>

								Klik hiervoor op onderstaande link. Ga naar ‘Details bestelling’ en klik daarna op ‘Stuur een e-mail’.<br>
								<a href='http://offringa4u.com/SailTrail/index.php?content=OrderedProducts'>→	Naar je bestelling</a><br>
								<img style='width:335px; height:132px; margin-bottom:20px;' src='http://offringa4u.com/SailTrail/img/sailrail-78393416.jpg'><br>
								GROOTSTE Online treinen winkel van NEDERLAND<br><br>
                </body>
            </html>";
        
        
					
    if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
				
				?><script>
						setInterval(function(){ window.location = 'index.php?content=orderSuccess'},100);
				</script><?php
				
            }else{
                //header("Location: checkout.php");
            }
        }else{
            //header("Location: checkout.php");
        }
    }else{
        //header("Location: index.php");
    }
}else{
    //header("Location: index.php");
}