<?php
date_default_timezone_set("Europe/Amsterdam");
$date = date("d-m-Y H:i:s");
$dateRegister = date('Y-m-d');
$key = $date.substr($_POST["Voornaam"],0,3).substr($_POST["Achternaam"],strlen($_POST["Achternaam"])-4,4);

include('db_connect.php');

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

else{
$query = "INSERT INTO `Gebruiker`
(`idGebruiker`,`Voornaam`,`Tussenvoegsel`,`Achternaam`,`Email`,`Straat`,`Huisnummer`,`Woonplaats`,`Postcode`,`Rekeningnummer`,`ActievatieDatum`,`activationKey`)
VALUES (NULL,
'".$_POST[Voornaam]."',
	'".$_POST[Tussenvoegsel]."',
	'".$_POST[Achternaam]."',
	'".$_POST[Email]."',
	'".$_POST[Straat]."',
	'".$_POST[Huisnummer]."',
	'".$_POST[Woonplaats]."',
	'".$_POST[Postcode]."',
	'".$_POST[Rekeningnummer]."',
	'".$_POST[ActievatieDatum]."',
	'".md5($key)."');";	
	
	$result = mysqli_query($connection, $query) or die (mysqli_error($connection));
	}
$last_id = mysqli_insert_id($connection);
if($result){
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

$mail->Subject = "Activeer uw account voor SailTrail";
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
                Bedankt voor het registreren, klik <a href='http://offringa4u.com/SailTrail/index.php?content=activation&id=".$last_id."&pw=".md5($key)."'>hier</a> om uw account te activeren. 
                </body>
            </html>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Actieveer uw account via de link in de mailbox";
}
else{
print("Registratie mislukt...");
header("Refresh: 3; url=index.php?content=register");
exit();
}

?>
