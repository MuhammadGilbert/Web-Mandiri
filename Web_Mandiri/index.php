<?php
//include auth_session.php file on all user panel pages
include("auth.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style3.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
	<div class="container">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php"><span>Animaux</span>Shop</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutUs.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="shop.php">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php">Cart</a>
      </li>
    </ul>
  </div>
	</div>
</nav>
  <div class="banner">
	<div class="container">
	<div class="banner-text">
	<div class="banner-heading">
	Love them Enough ,Give them Best
	</div>
	<div class="banner-sub-heading">
	Specialised in all Good Things 
	</div>
	<button type="button" class="btn btn-warning text-dark btn-banner">Get started</button>
	</div>
	</div>
</div>
<section id="about">
<div class="container">
	<div class="text-intro">
	<h2>About Us</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
	</div>
</div>
</section>
</body>
</html>