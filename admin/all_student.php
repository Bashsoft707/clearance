<?php
 require 'header.php'; 
?>
<div class="card" style="background: #424a5d; padding: 15px; margin: 20px;">
	<div class="row">
		<div class="col-md-4 dep active cs">Computer Science</div>
		<div class="col-md-4 dep ce">Computer Engineer</div>
		<div class="col-md-4 dep ee">Electrical Engineer</div>
	</div>
</div>
<div class="row card bg-success" style="width: 95%; margin: auto; color: white">
	<div class="row" style="padding: 5px;">
		<div class="col-md-3 col">Matric No</div>
		<div class="col-md-3 col">Year</div>
		<div class="col-md-3 col">Level</div>
		<div class="col-md-3 col">Action</div>
	</div>
	
</div>
	<?php
	$cs_data = mysqli_query($conn,"SELECT * from computer_science");
	while ($data_cs = mysqli_fetch_array($cs_data)){
		?>
		<div class="row card com_sci" style="width: 95%; margin: auto;">

			<div class="row " >
				<div class="col-md-3 col"><?php echo $data_cs['matric'] ?></div>
				<div class="col-md-3 col"><?php echo $data_cs['year'] ?></div>
				<div class="col-md-3 col"><?php echo $data_cs['level'] ?></div>
				<div class="col-md-3 col"><a href="student_profile.php?id=<?php echo $data_cs['id'] ?>&dept=computer_science" class="">view</a></div>
			</div>
		</div>
<?php }	 ?>
 <?php
 $ce_data = mysqli_query($conn,"SELECT * from computer_engineering");
 while ($data_ce = mysqli_fetch_array($ce_data)){
	 ?>
<div class="row card com_eng" style="width: 95%; margin: auto;display: none">
	
	<div class="row">
		<div class="col-md-3 col"><?php echo $data_ce['matric'] ?></div>
		<div class="col-md-3 col"><?php echo $data_ce['year'] ?></div>
		<div class="col-md-3 col"><?php echo $data_ce['level'] ?></div>
		<div class="col-md-3 col"><a href="#" class="">View</a></div>
	</div>
</div>
<?php }	 ?>

<?php
$ee_data = mysqli_query($conn,"SELECT * from electrical_engineering");
while ($data_ee = mysqli_fetch_array($ee_data)){
	 ?>
<div class="row card elect_el" style="width: 95%; margin: auto;display: none">
	
	<div class="row">
		<div class="col-md-3 col"><?php echo $data_ee['matric'] ?></div>
		<div class="col-md-3 col"><?php echo $data_ee['year'] ?></div>
		<div class="col-md-3 col"><?php echo $data_ee['level'] ?>2</div>
		<div class="col-md-3 col"><a href="#" class="">view</a></div>
	</div>
</div>
<?php }	 ?>
<script type="text/javascript">
	$(function () {
		
		$('.ce').click(function () {
			$('.elect_el').hide();
			$('.com_sci').hide();
			$('.com_eng').slideDown();
			$('.ce').addClass('active');
			$('.cs').removeClass('active');
			$('.ee').removeClass('active');

		})

		$('.cs').click(function () {
			$('.elect_el').hide();
			$('.com_eng').hide();
			$('.com_sci').slideDown();
			$('.cs').addClass('active');
			$('.ce').removeClass('active');
			$('.ee').removeClass('active');

		})

		$('.ee').click(function () {
			$('.elect_el').slideDown();
			$('.com_sci').hide();
			$('.com_eng').hide();
			$('.ee').addClass('active');
			$('.ce').removeClass('active');
			$('.cs').removeClass('active');

		})
	})
</script>
