
<!DOCTYPE html>
<html>
<head>
	<title>Web Authentication via Keystroke Dynamics</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<!-- //css files -->
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<script language="javascript" type="text/javascript">
        window.history.forward();
</script>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="../css/main.css"/>
<link rel="stylesheet" type="text/css" href="../css/animate.css"/>
<link href="../css/component.css" rel="stylesheet" type="text/css"  />

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/chocolat.css" type="text/css" media="screen" charset="utf-8">


<!-- //js files -->
<script src="js/modernizr.custom.97074.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/wow.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<script src="../js/jquery.min.js"></script>


 


</head>


	<?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['user']; //assigns user value
	// echo $user;
	if(isset($_SESSION['str'])&& isset($_SESSION['strn'])&& isset($_SESSION['strm'])){
	$res=$_SESSION['str'];
	$resn=$_SESSION['strn'];
	$resm=$_SESSION['strm'];
	}
	?>

<body>

	<!--  Header Section  -->
	<header>

	<!--  Logo Section  -->
		<div class="container">
			<div class="logo pull-left animated wow fadeInLeft">
				
			</div>

			
			<nav class="pull-left">
				<ul class="list-unstyled">
					<li class="animated wow fadeInLeft" data-wow-delay="0s"></li>
					<a href="#" style="font-size:20pt;color:#e8e51c">Keystroke Authentication</a>
			
				
				</ul>
			</nav>

			<nav class="social pull-right">
				<ul class="list-unstyled">
					<li class="animated wow fadeInRight" data-wow-delay=".1s">
					<a href="index.php" style=" font-size:15pt;color: #e8e51c;">Home
					</a></li>
					<li class="animated wow fadeInRight" data-wow-delay=".2s">
					<a href="index.php" style=" font-size:15pt;color: #e8e51c;">About
					</a></li>
					<li class="animated wow fadeInRight" data-wow-delay=".3s">
					<a href="index.php" style=" font-size:15pt;color: #e8e51c;">Github
					</a></li>
					<li class="animated wow fadeInRight" data-wow-delay=".4s">
					<a href="logout.php" style=" font-size:15pt;color: #e8e51c;">Logout
					</a></li>

			
</ul>
</nav>
</div>

	</header>
	<!--  End Header Section  -->



<div class="container">
 
 <div class="row">
  <div class="col-sm-2">
  <h3>Hello <?php Print "$user"?>!</h3> 
 

  <ul class="nav nav-pills nav-stacked">
    <li class="active">
    <li><a data-toggle="pill" href="#keys">Enter keystroke</a></li>
    <li><a data-toggle="pill" href="#man">Manhattan</a></li>
    <li><a data-toggle="pill" href="#euc">Eucledian </a></li>
    <li><a data-toggle="pill" href="#med">manhattan Median </a></li>
  </ul>
  </div>

  <div class="col-sm-10">
  <div class="tab-content">
    
    <div id="keys" class="tab-pane fade">
      <h3>Enter Keystroke</h3>
      <p><a href="../actions/create_account.php">Go to create logistics page</a></p>
    </div>
    <div id="euc" class="tab-pane fade in active">
      <h3>Euclidian</h3>
      <p><?php 
		if(!isset($res)){
			echo 'Variable name is not set';
		}
		else{
			echo $res;
		}
		 ?>
      </p>
    </div>
    <div id="man" class="tab-pane fade">
      <h3>Manhattan model</h3>
      <p> <?php 
		if(!isset($resn)){
		echo 'Variable name is not set';
		} 
		else{
			echo $resn;
		}?></p>
    </div>
    <div id="med" class="tab-pane fade">
      <h3>Manhattan model using median </h3>
      <p><?php 
		if(!isset($resm)){
			echo 'Variable name is not set';
		} 
		else{
			echo $resm;
		}?></p>
    </div>
  </div>
  </div>

  </div>
</div>



 <div class="copy-right">
		<p>Copyright © LK | All rights reserved </a></p>
	</div>
</body>
<html>