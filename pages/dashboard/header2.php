<?php 
  require '../../config/conn.php';
  if (!isset($_SESSION['clearance_student'])) {
  	header("location: ../login.php");
  } 
  $department = $_SESSION['student_department'];
  $matric = $_SESSION['clearance_student'];
  $data = mysqli_query($conn,"SELECT * from $department where matric = '$matric' ");
  $student = mysqli_fetch_array($data);
  $fullname = $student['surname']." ".$student['othernames'];

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<link rel="stylesheet" href="../../plugins/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="custom-css.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.dropdown-parent').click(function () {
				$('.dropdown').slideToggle();
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
				<li><img src="../upload/<?php echo $student['image']?>" class="user-image" width="90px" height="90px">
					<p class="user-name"><?php echo $fullname;?></p>
				</li>
				<li><a href="index.php"><i class="fa fa-tachometer"></i>
				Dashboard</a></li>
				<li><a href="personal_details.php"><i class="fa fa-tv"></i>
				Personal Details </a></li>
				<li><a href="#" class="dropdown-parent"><i class="fa fa-cogs"></i>
				My Fees</a>
					<ul class="dropdown" style="display: none">
						<li><a href="payment_history.php">Payment History</a></li>
						<li><a href="payment_advice.php">Payment Advice</a></li>
					</ul>
				</li>
				<li><a href="#"><i class="fa fa-book"></i>
				Completion Letter</a></li>
			</ul>
		</div>
		<div class="col-md-9">
			
	       <div class="contents container">