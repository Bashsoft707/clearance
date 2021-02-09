<?php
include('header2.php');
?>

	<div class=" wrap">
			<div class="details-wrap">
				<h2><i class="fa fa-chevron-right"></i>Student Details:</h2>
			<div class="text-box">
				<p class="active" style="color: black;"><i class="fa fa-chevron-right"></i> 
				Student Name: <?php echo $student['surname'.'othernames']?>Adewale Adam Olamide</p>
				<p class="active"><i class="fa fa-chevron-right"></i>
				Matric: <?php echo $student['matric']?></p>
				<p class="active"><i class="fa fa-chevron-right"></i>
				Department: Computer Engineering</p>
				<p class="active"><i class="fa fa-chevron-right"></i>
				School: <?php echo $student['school']?></p>
				<p class="active"><i class="fa fa-chevron-right"></i>
				Programme: <?php echo $student['programme']?></p>
				<p class="active"><i class="fa fa-chevron-right"></i>
				Level: <?php echo $student['level']?></p>
				<p class="active"><i class="fa fa-chevron-right"></i> 
				Session: <?php echo $student['year']?></p>				
				</div>
			</div>
		</div>
<?php
include('footer.php');
?>