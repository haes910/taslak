<?php


$user_row=$users->user('user_id',$_SESSION['user_id']);
if ($user_row['profilResmi']==0) { ?> <!--eğer profil resmi yoksa-->
  <div class="card" style="width: 18rem;">
  <img src="img/images1.jpg" id="result" class="card-img-top" alt="...">
  <div class="card-body">
    
<form action="islem.php" method="POST" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="inpFile">Bir Resim Seçiniz</label>
    <input type="file" name="inpFile" class="form-control-file" id="inpFile">
  </div>
  <hr>   
    <button type="submit" name="submit1" class="btn btn-primary">Kaydet</button>
    <!--gizli input bloğu-->
    <input type="hidden" name="klasor" value="users">
    <input type="hidden" name="islem" value="profil_resmi_ekleme">
</form> 

  </div>
</div>
<?php } else{ ?> <!--eğer profil resmi varsa-->
   <div class="card" style="width: 18rem;">
  <img src="<?php echo 'img/profil/'.$user_row['profilResmi'];?>" id="result" class="card-img-top" alt="...">
  <div class="card-body">
    
<form action="islem.php" method="POST" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="inpFile">Bir Resim Seçiniz</label>
    <input type="file" name="inpFile" class="form-control-file" id="inpFile">
  </div>
  <hr>   
    <button type="submit" name="submit2" class="btn btn-primary">Kaydet</button>
    <!--gizli input bloğu-->
    <input type="hidden" name="klasor" value="users">
    <input type="hidden" name="islem" value="profil_resmi_ekleme">
    <input type="hidden" name="eskiResim" value="<?php echo $user_row['profilResmi'];?>">
</form> 

  </div>
</div>
<?php } 
?>


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

