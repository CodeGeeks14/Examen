<!DOCTYPE html>
<?php session_start();?>
<html lang="nl">
<head>
  <title>SailTrail.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/turbotabs.css"/>
        <link rel="stylesheet" type="text/css" href="css/animate.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
        <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
</head>

<header>
<section class="header">
<div class="container-fluid">
	<div class="row">
	  <div class="col-md-12">
	  <?php include'navbar.php';?>
	  </div>
	</div>
<div class="Linkbar">
	<div class="row">
	  <div class="col-md-8">
	  <?php include 'Linkbar.php';?>
	  </div>
	</div>
</div>
<div class="SessionBar">
	<div class="row">
	  <div class="col-md-12">
	  <?php include 'SessionBar.php';?>
	  </div>
	</div>
</div>
</div>
</section>
</header>

<body>
<div class="Sidebar">
	<div>
	  <div class="col-md-2">
	  <?php include 'Sidebar.php';?>
	  </div>
	  </div>
</div>
<div class="Product">
	  <div class="col-md-10">
	  <?php include 'redirect.php';?>
	  
	</div>
	</div>
<div class="row">
<div class="col-md-12">
<?php include 'Footer.php';?>
</div>
</div>
</body>
</html>