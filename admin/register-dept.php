<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="custom-css.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<style type="text/css">
	body{
		background-image: url('../img/a.jpg');
	}
		.register{
			width: 50%;
			margin: 40px auto;
			padding: 10px;


		}
		.reg{
			background: ;padding: 20px; margin: auto;
			color: white;
			width: 100%;
			text-align: center;
		}
		.register input,.register select{
 			margin: 10px auto;
		}
		button{
			margin: auto;
			width: 90%
		}
		.register .row .first-col{
			border-right: 2px solid #0275d8;

		}
		.register .row .second-col{
			border-left: 2px solid #0275d8;

		}
	</style>
</head>
<body>
	<form action="action.php" method="POST" onsubmit="return validate()">
		<div class="container card register">
			<div class="card reg bg-primary" style=" "><h4>STUDENT AUTOMATIC MATRIC GENERATING PAGE</h4> </div>
			<div class="row">
				<div class="col-md-6 first-col">
					<input type="number" name="matric" placeholder="No of Students" class="form-control">
					<select class="form-control option_parent"  onchange="validate_select(this.value)" name="level">
						<option value="placeholder">
						Select Level........</option>
						<option value="nd2">ND 2</option>
						<option value="hnd2">HND 2</option>
					</select>
					<select class="form-control option_parent"  onchange="validate_select(this.value)" name="year">
						<option value="placeholder">
						Select Year........</option>
						<option value="2016_2017">2016/2017</option>
						<option value="2017_2018">2017/2018</option>
						<option value="2018_2019">2018/2019</option>
					</select>
				</div>
				<div class="col-md-6 second-col">
					
					<select class="form-control option_parent" id="department" onchange="validate_select(this.value)" name="department">
						<option value="placeholder">
						Select Department........ </option>
						<option value="computer_science">
						Computer Science </option>
						<option value="computer_engineering">Computer Engineering </option>
						<option value="electrical_engineering">
						Electrical Engineering </option>
					</select>
					<select class="form-control option_parent" onchange="validate_select(this.value)" name="school">
						<option value="placeholder">
						Select School..... </option>
						<option value="science_tech">
						School of Science & Technology</option>
						<option value="management_liberal">School of Management & Liberal Studies</option>
						<option value="environment_engineering">
						School of Environmental & Engineering</option>
					</select>
					<select class="form-control option_parent" onchange="validate_select(this.value)" name="programme">
						<option value="placeholder">
						Select Programme... </option>
						<option value="full_time">Full-Time</option>
						<option value="part_time">Part-Time </option>
					</select>
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
	<script type="text/javascript">
		function validate_select(value) {
			var option_parent = document.getElementsByClassName('option_parent')
			if(value == 'placeholder' ){
				option_parent.style.border='1px solid red'

			}else{
				option_parent.style.border='1px solid #ccc'
			}
		}
		function validate() {
			
		}
	</script>
</body>
</html>