<?php


$user_row=$users->user('user_id',$_SESSION['user_id']);

?>
<div class="card" style="width: 18rem;">
  <img src="img/images1.jpg" id="result" class="card-img-top" alt="...">
  <div class="card-body">
    
<form action="islem.php" method="POST" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="inpFile">Bir Resim Seçiniz</label>
    <input type="file" class="form-control-file" id="inpFile">
  </div>
  <hr>   
    <button type="submit" class="btn btn-primary">Kaydet</button>
    <!--gizli input bloğu-->
    <input type="hidden" name="klasor" value="users">
    <input type="hidden" name="islem" value="profil_resmi_ekleme">
</form> 

  </div>
</div>

<script type="text/javascript">
	$(function(){
		$('#inpFile').change(function(e){
			var resim = e.target.files[0];
			var reader=new FileReader();
			reader.readAsDataURL(resim);
			reader.onload=function(evt){
				$('#result').attr('src',evt.target.result);
			}
		});
	});
</script>

