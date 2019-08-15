
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<?php include 'view/navbar.view.php'; ?>
		</div>
	</div> 
</div>
<br>  

<div class="container">

	<div class="row">
		<?php
		if (isset($_GET['sayfa']) and !isset($_GET['klasor'])) {
			$sayfa=$_GET['sayfa'];
			include 'view/'.$sayfa.'.view.php';
		}elseif (isset($_GET['sayfa']) and isset($_GET['klasor'])) {
			$sayfa=$_GET['sayfa'];
			$klasor=$_GET['klasor'];
			include 'view/'.$klasor.'/'.$sayfa.'.view.php';
		}else{
			include 'view/anasayfa.view.php';
		}
		?>	
	</div>
 
</div>




