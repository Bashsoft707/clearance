<?php require 'header.php'; 
$id = $_GET['id'];
$dept = $_GET['dept'];
$fetch_user = mysqli_query($conn, "SELECT * FROM $dept WHERE id = '$id'");
$user = mysqli_fetch_array($fetch_user);

if (isset($_POST['sub-1'])) {
	$value = $_POST['value'];
	$matric = $user['matric'];
	$update = mysqli_query($conn, "UPDATE $dept set admin = '$value' WHERE matric ='$matric'");
}elseif (isset($_POST['sub-2'])) {
	$value = $_POST['value'];
	$matric = $user['matric'];
	$update = mysqli_query($conn, "UPDATE $dept set library = '$value' WHERE matric ='$matric'");
}elseif (isset($_POST['sub-3'])) {
	$value = $_POST['value'];
	$matric = $user['matric'];
	$update = mysqli_query($conn, "UPDATE $dept set sug_fee = '$value' WHERE matric ='$matric'");
}elseif (isset($_POST['sub-5'])) {
	$value = $_POST['value'];
	$matric = $user['matric'];
	$update = mysqli_query($conn, "UPDATE $dept set departmental_fee = '$value' WHERE matric ='$matric'");
}elseif (isset($_POST['sub-6'])) {
	$value = $_POST['value'];
	$matric = $user['matric'];
	$update = mysqli_query($conn, "UPDATE $dept set health_center = '$value' WHERE matric ='$matric'");
}elseif (isset($_POST['sub-7'])) {
	$value = $_POST['value'];
	$matric = $user['matric'];
	$update = mysqli_query($conn, "UPDATE $dept set eed = '$value' WHERE matric ='$matric'");
}

?>
<div style="margin: 14px">
	<div class="header" style="background: white;padding: 16px;border-radius: 5px;overflow: hidden;margin: 5px">
		<div class="img-container" style="float: left;width: 20%">
			<img src="../pages/upload/<?php echo $user['image'] ?>" style="width: 120px;height: 120px;border-radius: 50%;padding: 2px;border:  2px solid #ffd777">
		</div>
		<div class="header-text" style="float: left;width: 60%;">
			<h4 style="margin: 10px;"><?php echo $user['surname']." ".$user['othernames']; ?></h4>
			<h5 style="margin: 10px"><?php echo $user['matric']; ?></h5>
			<h5 style="margin: 10px"><?php echo $user['department']; ?></h5>
		</div>
		<div class="header-text" style="float: left;width: 20%;">
			<h5 style="margin: 10px;text-align: ">ND2</h5>
			<h5 style="margin: 10px;text-align: ">2018/19</h5>
		</div>
	</div>
	<div class="app-content" style="background: white;padding: 16px;border-radius: 5px;overflow: hidden;margin: 5px">
		<?php
		$select_fees = mysqli_query($conn, "SELECT * FROM student_profile");
		while ($data = mysqli_fetch_array($select_fees)) { ?>
		<div style="border: 1px solid #bbbbbb;border-radius: 4px;padding: 8px;margin: 4px;">
			<div style="font-size: 18px;font-weight: bold;display: inline-block;"><?php echo $data['name'] ?></div>
			<form class="lower-section" method="post" action="student_profile.php?id=<?php echo $id ?>&dept=<?php echo $dept ?>" style="width: 100%;overflow: hidden;">
				<input type="text" name="value" style="width: 70%;border: 1px solid #ffd777;padding: 8px;"><button name="sub-<?php echo $data['id'] ?>" style="float: right;width: 20%;color: white; text-decoration: none; background: #ffd777;padding: 8px;box-shadow: 3px 3px 10px #ffd777;border: 1px solid #ffd777;transition: 0.5s;text-align: center;" onmouseover="this.style. background='white',this.style.color='#ffd777'" onmouseout="this.style. background='#ffd777',this.style.color='white'" >Add Fee</button>
			</form>
		</div>
	<?php } ?>
	</div>
</div>