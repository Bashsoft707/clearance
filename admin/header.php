<?php 
  require '../config/conn.php';

  if (!isset($_SESSION['clearance_admin'])) {
  	header("location: login.php");
  } 
  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../pages/dashboard/custom-css.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.dropdown-parent1').click(function () {
				$('.dropdown1').slideToggle();
			})
			$('.dropdown-parent2').click(function () {
				$('.dropdown2').slideToggle();
			})

		})
	</script>
	
</head>
<body>
	<div class="row" id="header">
		<div class="col-md-1 col-sm-1 col-xs-1">
			<i class="fa fa-bars" id="bars"></i>
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12">
			<h3>THE GATEWAY [ICT] POLYTECHNIC, SAAPADE</h3>
		</div>
		<div class="col-md-2 col-sm-hidden col-xs-hidden">
			<a href="logout.php" class="btn btn-success btn-small">Logout</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 side-bar">
			<ul>
				<li><a href="index.php"><i class="fa fa-tachometer"></i>
				Dashboard</a></li>
				<li><a href="#" class="dropdown-parent1"><i class="fa fa-cogs"></i>
				Students</a>
					<ul class="dropdown1">
						<li><a href="all_student.php">All Students</a></li>
						<li><a href="register-dept.php">Add New Students</a></li>
					</ul>
				</li>
				<li><a href="#"><i class="fa fa-book"></i>
				Completion Letter</a></li>
			</ul>
		</div>
		<div class="col-md-9">
			
	       <div class="contents container">