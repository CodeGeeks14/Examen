<?php
// include database configuration file
include('db_connect.php');
$connection = mysqli_connect($servername, $username, $password, $dbname);

// initializ shopping cart class
include 'cart.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: index.php");
    exit();
}

$gebruikersId = $_SESSION['id'];
$query = "SELECT * FROM Gebruiker WHERE idGebruiker = '$gebruikersId'";
$custRow = mysqli_query($connection,$query);

while($row = $custRow->fetch_assoc()){
    $voornaam = $row['Voornaam'];
    $tussenvoegsel = $row['Tussenvoegsel'];
    $achternaam = $row['Achternaam'];
    $email = $row['Email'];
    $woonplaats = $row['Woonplaats'];
    $straatnaam = $row['Straat'];
    $huisnummer = $row['Huisnummer'];
    $postcode = $row['Postcode'];
    $rekeningnummer = $row['Rekeningnummer'];
    //$kortingtot = $row['kortingTot'];
}
if (empty($email)) {
    echo "<h1>U moet eerst inloggen voordat u verder kunt gaan.</h1><br> Klik op onderstaande link om aan te melden heeft u nog geen account maak deze dan aan
		<a href='index.php?content=LoginRegister' class='btn' style='color:black;width:120px;'>Account</a>";
	exit();
}
?>

<head>
    <title>Order Overzicht</title>
    <meta charset="utf-8">
    <style>
    .container{width: 100%;padding: 50px;}
    .table{width: 65%;float: left;}
    .shipAddr{width: 30%;float: left;margin-left: 30px;}
    .footBtn{width: 95%;float: left;}
    .orderBtn {float: right;}
    </style>
</head>
<body>
<div class="container">
    <h1>Order:</h1>
        <table class="table">
        <form id="order_form" action="index.php?content=do_checkout" method="post"> 
        <tr>
            <th>Film</th>
            <th>Prijs</th>
            <th>Aantal</th>
            <th>Subtotaal</th>
        </tr>
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
            <td><input name="id_film" type="hidden" value="<?php echo $item["name"]; ?>"><?php echo $item["name"]; ?></td>

            <td><?php echo '$'.$item["price"].' EUR'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '$'.$item["subtotal"].' EUR'; ?></td>
            
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>Geen Producten in de winkelwagen.</p></td>
        <?php } ?>
            <tr>
            <?php
           // if(date() < $kortingtot){
          //      echo "<td>Met 25% korting</td>";
         //   }
            

            ?>
            <td colspan="3"></td>
                
            <?php if($cart->total_items() > 0){
					if($cart->total_items() == 1){
						echo '<script>alert("Let op u krijgt geen korting!");</script>';			
					}
                
               // $totaalBedrag = $cart->total();

                if(date() < $kortingtot){
                    $totaalBedrag = 1.00 * $totaalBedrag + 2.00;
                }
            ?>
             
            <td class="text-center"><strong>Totaal <?php echo  '$'.$totaalBedrag.' EUR'; ?></strong></td>
               
            <?php } ?>
        </tr>
        <tr>
            
	   
        </tr>
        <tr>
            <td>
                <input style="visibility: hidden;" type="submit" value="Plaats order">
            </td>    
        </tr>
    </table>
    </form>
    <div class="shipAddr">
	
        <?php 
                echo "<h4>Adres gegevens</h4>";
                echo "<table><tr><th></th><th></th>";
                echo "<tr><td><p> Naam: </td><td>".$voornaam." ".$tussenvoegsel." ".$achternaam."</p></td>";
                echo "<tr><td><p> Email: </td><td>".$email."</p></td>";
                echo "<tr><td><p> Woonplaats: </td><td>".$woonplaats."</p></td>";
                echo "<tr><td><p> Straatnaam | Huisnummer: </td><td>".$straatnaam." ".$huisnummer."</p></td>";
                echo "<tr><td><p> Postcode: </td><td>".$postcode."</p></td>";
                echo "<tr><td><p> Rekeningnummer: </td><td>".$rekeningnummer."</p></td>";
                if(date() < $kortingtot){
                    echo "<tr><td><p>Korting:</p></td><td>25%</td></tr>";
                }
                echo "</table>";
				
        ?>
		<form id="placeorder" action="index.php?content=cartAction&action=placeOrder" method="post">

        <h2>Opmerking:</h2>
        <textarea style="height:200px;width:500px;" class="textBox" type="text" 
                   name="opmerking"></textarea>
    

        <br>
		<b>Kies Uw verzendwijze</b>
		<select class="verzendbutton">
		<option>DHL</option>
		<option>Express verzending</option>
		<option>PostNL</option></select>
		<br><br>
	
        
        
        

    </div>
    <div class="footBtn">
        <a href="index.php?content=MarklinLocomotive" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i>Verder zoeken</a>
        <button style="float:right;" class="btn" type="submit" form="placeorder" value="Submit">Plaats order</button>
    </div>
	</form>
</div>
</body>
</html>
<script>
    $("#datepickerLeveren").datepicker({
        onSelect: function(date){
           $("#leverdatum").val(date);
            var selectedDate = new Date(date);
            var secDay = 86399999;
            var minDate = new Date(selectedDate.getTime()+secDay * 8);
            var maxDate = new Date(selectedDate.getTime()+secDay * 21);
            $("#datepickerOphaal").datepicker("option", "minDate", minDate);
            $("#datepickerOphaal").datepicker("option", "maxDate", maxDate);
            var movieCount = $("#movieCount").val();
            var date1 = new Date($("#datepickerOphaal").datepicker("getDate"));
            var date2 = new Date($("#datepickerLeveren").datepicker("getDate"));
              var timeDiff = date1.getTime() - date2.getTime();
              var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
              var weekCount = Math.floor(diffDays/7);
              console.log(diffDays);
              var boetes = parseFloat($("#boetes").val());
              var remainingDays = diffDays % 7;
              var price = (7 + ((weekCount - 1) * 6) + (remainingDays * 1)) * movieCount;
              var prijsMetBoete = price + boetes;
              var priceWithShipping = prijsMetBoete + 2;
            console.log(weekCount);
            console.log(remainingDays);
            
        },
        dateFormat: 'yy-mm-dd',
        minDate: "+1d"
    });
    
    $("#datepickerOphaal").datepicker({
       onSelect: function(date){
           $("#ophaaldatum").val(date);
           var movieCount = $("#movieCount").val();
            var date1 = new Date($("#datepickerOphaal").datepicker("getDate"));
            var date2 = new Date($("#datepickerLeveren").datepicker("getDate"));
              var timeDiff = date1.getTime() - date2.getTime();
              var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
              var weekCount = Math.floor(diffDays/7);
              console.log(diffDays);
              var boetes = parseFloat($("#boetes").val());
              var remainingDays = diffDays % 7;
              var price = (7 + ((weekCount - 1) * 6) + (remainingDays * 1)) * movieCount;
              var prijsMetBoete = price + boetes;
              var priceWithShipping = prijsMetBoete + 2;
            console.log(weekCount);
            console.log(remainingDays);
        },
        dateFormat: "yy-mm-dd",
        maxDate: "+3w +1d",
        minDate: "+1w +1d"
        
        
    });
    
    $('.timepicker1').timepicker({
    timeFormat: 'h:mm p',
    interval: 10,
    minTime: '6pm',
    maxTime: '10pm',
    defaultTime: '6pm',
    startTime: '10:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});    
    $('.timepicker2').timepicker({
    timeFormat: 'h:mm p',
    interval: 10,
    minTime: '6pm',
    maxTime: '10pm',
    defaultTime: '6pm',
    startTime: '10:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});

    $('.timepicker1').timepicker("option", "change", function(){
        var tijd = $(this).val();
        var datum = $("#leverdatum").val();
        console.log(tijd);
        $.ajax({
      url: "checkTime.php",
      type: "POST",
      dataType: "json",
      data: {
        action: 'checkTime',
        data: tijd,
          datum: datum
      },
       complete: function(data){
        if (data) {
            var disableTime = [data.responseText];
            $('#aflevertijdBezet').html(disableTime);
            if(data.responseText == "niet bezet"){
                $("#aflevertijdBezet").css("background-color", "green");
            }
            else{
                $("#aflevertijdBezet").css("background-color", "red");    
            }
            console.log(disableTime);
        }
        else {
          // $("#div1").html('error');
            console.log('Niks gevonden');
        }
    }});
    });
    
    $('.timepicker2').timepicker("option", "change", function(){
        var tijd = $(this).val();
        var datum = $("#ophaaldatum").val();
        console.log(tijd);
        $.ajax({
      url: "checkTime.php",
      type: "POST",
      dataType: "json",
      data: {
        action: 'checkTime',
        data: tijd,
          datum: datum
      },
       complete: function(data){
        if (data) {
            var disableTime = [data.responseText];
            $('#ophaaltijdBezet').html(disableTime);
            if(data.responseText == "niet bezet"){
                $("#ophaaltijdBezet").css("background-color", "green");
            }
            else{
                $("#ophaaltijdBezet").css("background-color", "red");    
            }
            console.log(disableTime);
        }
        else {
          // $("#div1").html('error');
            console.log('Niks gevonden');
        }
    }});
    });
    
</script>