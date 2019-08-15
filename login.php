
<div class="container">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <br>
      <br>
      <br>
      <form action="islem.php" method="POST">
  <div class="form-group">
    <label for="user">Kullanıcı Adı</label>
    <input type="text" name="userName" class="form-control" id="user" >
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="pass" class="form-control" id="password" >
  </div>
 
  <input type="hidden" name="klasor" value="login">
  
  <button type="submit" name="islem" value="login_kontrol" class="btn btn-primary">Giriş Yap</button>

</form>
    </div>
  </div>
</div>
