<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" href="../../plugins/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		html, body{
			padding: 0;
			margin: 0;
			background: lightgray;
		}
		.top{
			background: #ffd777;
			margin-top: -23px;
			padding: 0;
		}
		.contents .fa{
			font-size: 50px;
		}
		h1{
			color: white;
			font-family: sans-serif;
			padding: 10px 20px;
			font-size: 20px;

		}
		#home{
			color: black;
			padding: 10px;
		}
		#logout{
			margin: 10px;
			float: right;
			border: none;
			outline: none;
			background: aqua;
			color: white;
			padding: 4px 12px;
			font-family: sans-serif;
			border-radius: 10%;
		}
		.contain{
			display: flex;
			width: 100%;
		}
		.side-bar{
			width: 25%;
			background: #424a5d;
			margin: -15px;
		}
		ul{
			list-style-type: none;
		}
		li a{
			text-decoration: none;
			color: #ffffff;
			padding: 10px;
			display: block;
		}
		li a:hover{
			color: blue;
		}
		img{
			width: 60px;
			height: 80px;
			border-radius: 50%;
			margin: 5% 40% 0 40%;
		}
		p{
			text-align: center;
			color: white;
			font-size: 15px;
			margin-left: 10px;
			font-family: monospace;
		}
		#icons{
			padding: 10px;
			color: #ffffff;
		}
		.contents{
			width: 75%;
		}
		.wrap{
			background: white;
			margin: auto;
			width: 80%;
			height: 400px;
			padding: 20px;
			box-shadow: 2px 2px gray;
		}
		h2{
			color: gray;
			text-align: left;
			margin: 10px;
		}
		.text-box{
			background: #def0d8;
			width: 100%;
			height: 350px;
			margin: 10px;
		}
		.active{
			display: block;
			color: green;
			padding: 10px;
			font-weight: bold;
			text-align: left;
			font-family: sans-serif;
		}
		i{
			padding: 0 10px;
		}
		</style>
</head>
<body>
	<div class="top">
		<h1><span class="fa fa-home" id="home"></span> THE GATEWAY [ICT] POLYTECHNIC, SAAPADE
		<button id="logout">Logout</button>
	</h1>	
	</div>
	<div class="contain">
		<div class="side-bar">
			<img src="file:///C:/Users/HP/Pictures/IMG_20190130_172632.jpg" alt="">
		<p>ALAUSA BASHIR OLAMILEKAN</p>
			<ul>
				<li><a href="#"><span class="fa fa-bank" id="icons"></span>Dashboard</a></li>
				<li><a href="#"><span class="fa fa-tv" id="icons"></span>Personal Detail</a></li>
				<li><a href="#"><span class="fa fa-cogs" id="icons"></span>My fees</a></li>
				<li><a href="#"><span class="fa fa-pie-chart" id="icons"></span>Course Registration</a></li>
				<li><a href="#"><span class="fa fa-bar-chart" id="icons"></span>Result Checker</a></li>
				<li><a href="#"><span class="fa fa-share" id="icons"></span>Clearance</a></li>
			</ul>
		</div>
		<div class="contents container">
			<div class="wrap">
				<div class="row">
					<div class="col-md-3 card m-3">
						<div>
							<i class="fa fa-home"></i>
							<span>ADMIN</span>
							<h6>debt : <i>no debt</i></h6>
						</div>
					</div>
					<div class="col-md-3 card m-3">
						<div>
							<i class="fa fa-book"></i>
							<span>LIBRARY</span>
							<h6>debt : <i>#4000</i></h6>
						</div>
					</div>
					<div class="col-md-3 card m-3">
						<div>
							<i class="fa fa-home"></i>
							<span>HEALTH CENTER</span>
							<h6>debt : <i>#200</i></h6>
						</div>
					</div>
				</div>
			<div class="row">
					<div class="col-md-3 card m-3">
						<div>
							<i class="fa fa-home"></i>
							<span>DEPARTMENT</span>
							<h6>debt : <i>no debt</i></h6>
						</div>
					</div>
					<div class="col-md-3 card m-3">
						<div>
							<i class="fa fa-book"></i>
							<span>SUG</span>
							<h6>debt : <i>#4000</i></h6>
						</div>
					</div>
					<div class="col-md-3 card m-3">
						<div>
							<i class="fa fa-home"></i>
							<span>OTHER EXPENSES (DAMAGES)</span>
							<h6>debt : <i>#200</i></h6>
						</div>
					</div>
				</div>
