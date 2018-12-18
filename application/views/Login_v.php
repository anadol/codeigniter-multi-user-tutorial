<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>
<body>
  <br>
  <h3 class="text-center">Giriş</h3>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-md-6 card card-block bg-light col-4 mx-auto">
        <form action="<?php echo base_url("giris-yap"); ?>">
          <div class="form-group">
            <br>
            <label>E-posta Adresiniz</label>
            <input type="email" name="eposta" class="form-control" placeholder="E-posta">
          </div>
          <div class="form-group">
            <label>Şifre</label>
            <input type="password" name="sifre" class="form-control" placeholder="Şifre">
          </div>
          <div align="right" class="col-md-12">
            <button type="submit" class="btn btn-primary">Giriş</button>
          </div>
        </form>
        <br>
      </div>
    </div>
  </div>
</body>
</html>