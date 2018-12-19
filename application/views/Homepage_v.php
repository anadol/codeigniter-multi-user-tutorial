<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Anasayfa</title>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
  <style>
    *{
      font-size: 16px;
    }
  </style>
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
          
          <?php foreach ($user_list as $item) { ?>
            <?php if (md5($item->email) != md5($user->email)) { ?>
           
             <li><a target="_blank" class="dropdown-item" href="<?php echo base_url("anasayfa/".md5($item->email)); ?>"><strong><?php echo $item->full_name; ?></strong> ile oturum aç</a></li>   
              
            <?php } ?>
           
          <?php } ?>

          <div class="dropdown-divider"></div>
          <li><a target="_blank" class="dropdown-item" href="<?php echo base_url("giris"); ?>"><strong>Farklı bir hesapla oturum aç</strong></a></li>
          <div class="dropdown-divider"></div>
          <li><a class="dropdown-item" href="<?php echo base_url("cikis/".md5($user->email)); ?>">Çıkış</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

  <div class="container"><br>
    <div class="row">
      <div class="col-md-5 card card-block bg-light col-3 mx-auto">
        <h4 class="text-center" style="margin-top: 10px;">Eklediğiniz Ürünler</h4>
        <table class="table table-hover table-striped table-bordered">
          <thead>
            <th>Id</th>
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