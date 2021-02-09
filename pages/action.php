<?php
require '../config/conn.php';
if (isset($_POST['submit'])) {
	$matric = $_POST['matric'];
	$surname = $_POST['surname'];
	$othernames = $_POST['firstname'].' '.$_POST['lastname'];
	$year = $_POST['year'];
	$department = $_POST['department'];
	$school = $_POST['school'];
	$programme = $_POST['programme'];
	$temp_name = $_FILES['image']['tmp_name'];
	$image = $_FILES['image']['name'];
	if(!is_dir('upload')){
		mkdir('upload');
	}
	$upload = move_uploaded_file($temp_name, "upload/$image");
    if($upload){
    	$update = mysqli_query($conn, "UPDATE $department set surname = '$surname', othernames = '$othernames',image = '$image',school = '$school' WHERE matric = '$matric' ");
	if ($update) {
		die('successful');
	}else{
		die('unsuccessful'); 		
	}
    }else{
    	die('unable to upload this file');
    }
	
}
	

?>