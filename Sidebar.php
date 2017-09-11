<head>
  <title>Sidebar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <!-- <div class="absolute-wrapper"> </div> -->
    <!-- Menu -->
    <div class="side-menu">
    
    <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <div class="brand-wrapper">
            <!-- Hamburger -->
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Brand -->
            <div class="brand-name-wrapper">
                <a class="navbar-brand" href="#">
                    Trains
                </a>
            </div>
            <!-- Search -->
            <a data-toggle="collapse" href="#search" class="btn btn-default" id="search-trigger">
                <span class="glyphicon glyphicon-search"></span>
            </a>

            <!-- Search body -->
            <div id="search" class="panel-collapse collapse">
				<div class="search col-lg-4 col-sm-4 col-lg-offset-2 col-md-offset-4">
				  <form id="searchSmall"><input class="col-md-offset-2" type="text" id="searchBar" placeholder="zoek naar een product"><button id="searchSubmit" class="btn btn-primary" type="submit"> zoek </button></form>
				</div>
                <div class="panel-body">

                    <!--<form method="get" action="search.php" name="query" class="navbar-form" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-ok"></span></button>
                    </form>-->
                </div>
            </div>
        </div>

    </div>

    <!-- Main Menu -->
    <div class="side-menu-container">
        <ul class="nav navbar-nav">

            <!-- Dropdown-->
            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl1">
                    <span class=""></span><b> Locomotives</b><span class="caret"></span>
                </a>

                <!-- Dropdown level 1 -->
                <div id="dropdown-lvl1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href=".<?php $_SERVER["SERVER_NAME"]?>./SailTrail/index.php?content=productlist&idCategorie=1">Stoom Treinen</a></li>
                            <li><a href=".<?php $_SERVER["SERVER_NAME"]?>./SailTrail/index.php?content=productlist&idCategorie=2">Diesel Treinen</a></li>
                            <li><a href=".<?php $_SERVER["SERVER_NAME"]?>./SailTrail/index.php?content=productlist&idCategorie=3">Elektrische Treinen</a></li>

                        </ul>
                    </div>
                </div>
            </li>
			<!-- Dropdown-->
            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl3">
                    <span class=""></span><b> Wagon</b> <span class="caret"></span>
                </a>

                <!-- Dropdown level 3 -->
                <div id="dropdown-lvl3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href=".<?php $_SERVER["SERVER_NAME"]?>./SailTrail/index.php?content=productlist&idCategorie=4">Transport Wagon</a></li>
                            <li><a href=".<?php $_SERVER["SERVER_NAME"]?>./SailTrail/index.php?content=productlist&idCategorie=5">Personen Wagon</a></li>

                        </ul>
                    </div>
                </div>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

    </div>
</div>	
<script>
$("#searchSmall").submit(function(e){
  e.preventDefault();
  var searchVal = $(this).find("#searchBar").val();
  window.location.href = "http://offringa4u.com/SailTrail/index.php?content=search&query="+searchVal+"";
});
</script>