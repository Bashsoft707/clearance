<?php
 require 'header2.php'
?>
	<div class="index-wrap">
		<div class="row">
			<div class="col-md-3 card m-3">
				<div>
					<i class="fa fa-home"></i>
					<span>ADMIN</span>
					<h6>debt : <?php echo $student['admin']; ?></h6>
				</div>
			</div>
			<div class="col-md-3 card m-3">
				<div>
					<i class="fa fa-book"></i>
					<span>LIBRARY</span>
					<h6>debt : <?php echo $student['library']; ?></h6>
				</div>
			</div>
			<div class="col-md-3 card m-3">
				<div>
					<i class="fa fa-home"></i>
					<span>HEALTH CENTER</span>
					<h6>debt : <?php echo $student['health_center']; ?></h6>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 card m-3">
				<div>
					<i class="fa fa-home"></i>
					<span>DEPARTMENT</span>
					<h6>debt : <?php echo $student['departmental_fee']; ?></h6>
				</div>
			</div>
			<div class="col-md-3 card m-3">
				<div>
					<i class="fa fa-book"></i>
					<span>SUG</span>
					<h6>debt : <?php echo $student['sug_fee']; ?></h6>
				</div>
			</div>
			<div class="col-md-3 card m-3">
				<div>
					<i class="fa fa-home"></i>
					<span>EED</span>
					<h6>debt : <?php echo $student['eed']; ?></h6>
				</div>
			</div>
		</div>

<?php
require 'footer.php'
?>