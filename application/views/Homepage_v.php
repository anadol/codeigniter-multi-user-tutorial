<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Anasayfa</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><?php echo $user->full_name; ?></a>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          İşlemler
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo base_url("cikis/".md5($user->email)); ?>">Çıkış</a></li>
          <li><a target="_blank" class="dropdown-item" href="<?php echo base_url("giris"); ?>">Farklı bir hesapla oturum aç</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

  <div class="container"><br>
    <div class="row">
      <div class="col-md-5 card card-block bg-light col-3 mx-auto">
        <h4>Eklediğiniz Ürünler</h4>
        <table class="table table-hover table-striped table-bordered">
          <thead>
            <th>id</th>
            <th>Ürün Adı</th>
          </thead>
          <tbody>
            <?php foreach($products as $product){ ?>
              <tr>
                <td><?php echo $product->id; ?></td>
                <td><?php echo $product->product_name; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
</body>
</html>


<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><?php echo $user->full_name; ?></a>
  
  <div class="collapse navbar-collapse" id="navbarNav">
   <div class="dropdown show ml-auto" >
  <a class="btn btn-secondary dropdown-toggle"  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    İşlemler
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="<?php echo base_url("cikis"); ?>">Çıkış</a>
    <a class="dropdown-item" href="<?php echo base_url("giris"); ?>">Farklı bir hesapla oturum aç</a>
  </div>
</div>
  </div>
</nav> -->