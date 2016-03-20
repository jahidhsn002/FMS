<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="<?php echo site_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo site_url('css/dataTables.bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url(''); ?>">Dashboard</a></li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Supplier
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
			  <li><a href="<?php echo site_url('Supplier'); ?>">Supplier List</a></li>
			  <li><a href="<?php echo site_url('Supplier/edit/new'); ?>">Add Supplier</a></li>
			</ul>
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Drug
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
			  <li><a href="<?php echo site_url('Drug'); ?>">Drug List</a></li>
			  <li><a href="<?php echo site_url('Drug/edit/new'); ?>">Add Drug</a></li>
			</ul>
		</li>
        <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Stock
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
			  <li><a href="<?php echo site_url('Stock'); ?>">Stock Remain</a></li>
			  <li><a href="<?php echo site_url('Stock/find'); ?>">Add Stock</a></li>
			  <li><a href="<?php echo site_url('Stock/low'); ?>">Low in Stock</a></li>
			</ul>
		</li>
		<li><a href="#">Rcives</a></li>
        <li><a href="#">Sales</a></li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dues
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
			  <li><a href="<?php echo site_url('Supplier'); ?>">Due Payment</a></li>
			  <li><a href="<?php echo site_url('Supplier/edit/new'); ?>">Due Collection</a></li>
			</ul>
		</li>
		<li><a href="#">Configuration</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
			  <li><a href="<?php echo site_url('Supplier'); ?>">Log Out</a></li>
			  <li><a href="<?php echo site_url('Supplier/edit/new'); ?>">View Profile</a></li>
			</ul>
		</li>
      </ul>
    </div>
  </div>
</nav>