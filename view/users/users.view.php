
<div class="container">
	<div class="row">
		<!--sol sütün-->
		<div class="col-md-4">
			<?php 
			  if (isset($_GET['sol'])) {
			  	$sol=$_GET['sol'];
			   include 'view/users/sol/'.$sol.'.view.php';
			  }
			?>
		</div>
		<!--orta sütün-->	
		<div class="col-md-8">
			<?php 
			  if (isset($_GET['orta'])) {
			  	$orta=$_GET['orta'];
			   include 'view/users/orta/'.$orta.'.view.php';
			  }
			?>
		</div>
		<!--Sağ sütün-->
		<div class="col-md-0">
			<?php 
			  if (isset($_GET['sag'])) {
			  	$sag=$_GET['sag'];
			   include 'view/users/sag/'.$sag.'.view.php';
			  }
			?>
		</div>
	</div>
	
</div>