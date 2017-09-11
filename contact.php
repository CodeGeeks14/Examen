<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
		<h1><b>Neem contact op met de Online Shop</b></h1>
<h3>Natuurlijk, we zijn altijd bereid om een ​​bestelling uit te voeren op basis van uw bestelling naar uw volledige tevredenheid. Niettemin, ooit één te geven of de andere vraag om online te winkelen of vraag over een bestelling of levering voor u individueel. Gebruik het volgende formulier om uw vraag te stellen in de winkel service. De meest nauwkeurige gegevens onder "Subject" zal ons helpen om het onderzoek snel uit te voeren om de betreffende winkel personeel - dank u!

Zorg alleen vragen over de gebeurtenissen in het Märklin Online Shop</h3>
<br><br>
<b><h2>Neem contact op met de Online Shop</h2></b>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your name:<br>
    <input name="name" type="text" value="" size="30"/><br>
    Your email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Send email"/>
    </form>

    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("olafsmid@hotmail.com", $subject, $message, $from);
		echo "Email verzonden Wij gaan er zo snel mogelijk mee aan de slag!";
	    }
		
    }  
	
?>
						