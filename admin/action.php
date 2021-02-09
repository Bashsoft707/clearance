<?php
require '../config/conn.php';
if (isset($_GET['add_fee'])) {
	die('good');
}
if (isset($_POST['submit'])) {
	
	$number_of_student = $_POST['matric'];
	$year = $_POST['year'];
	$department = $_POST['department'];
	$school = $_POST['school'];
	$programme = $_POST['programme'];
	$level = $_POST['level'];
	
	function generate($n_o_s,$y,$d,$s,$p,$l,$con){
		$programme_code = $year_code = $department_code = $school_code = $matric_num = '';
      if ($d == 'computer_science') {
		  $department_code = '02';
	  }
	  if ($d == 'computer_engineering') {
		  $department_code = '01';
	  }
	  if ($d == 'electrical_engineering') {
		  $department_code = '03';
	  }
	  if ($l == 'nd2') {
		  $level_code = '1';
		}
	  if ($l == 'hnd2') {
		  $level_code = '3';
	  }

	if ($y == '2016_2017') {
		$year_code = '16';
	}
	if ($y == '2017_2018') {
		$year_code = '17';
	}
	if ($y == '2018_2019') {
		$year_code = '18';
	}
	if ($p == 'part_time') {
		$programme_code = '02';
	}
	if ($p == 'full_time') {
		$programme_code = '01';
	}
    $school_code = '1';
    
    
    for ($matric=1; $matric <= $n_o_s ; $matric++) { 
    	 if(strlen($matric) == 1){
    	 	$matric = '00'.$matric;
    	 }elseif (strlen($matric) == 2) {
    	 	$matric ='0'.$matric;
    	 }else{
    	 	$matric =$matric;
    	 }
    	 $matric_num = $year_code.$programme_code.$department_code.$level_code.$school_code.$matric;
    	 
    	 $insert = mysqli_query($con, "INSERT into $d (matric,level,year,programme) values('$matric_num','$l','$y','$p')" );

    	
    }
    if($insert){
    	die('good');
    }else{
    	die('bad');
    }

    
  

   
}
generate($number_of_student,$year,$department,$school,$programme,$level,$conn);
}

?>