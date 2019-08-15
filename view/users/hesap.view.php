<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="list-group">
		  
		  <a href="?klasor=users&sayfa=hesap&form=profil_resmi" class="list-group-item list-group-item-action">Profil Resmi</a>
		  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
		  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
		  <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
		</div>
		</div>
		<div class="col-md-8">
			<?php
				if (isset($_GET['form'])) {
					include 'view/users/'.$_GET['form'].'.view.php';
				} 
				
			?>
		</div>
	</div>
</div>