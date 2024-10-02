<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giriş Yap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <form action="giris.php" method="post" >
    <div class="container p-5">
      <div class="card p-5">
      <form>

      <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Kullanıcı Adı</label>
    <input type="text" class="form-control" id="kullanici" name="kullanici">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Şifre</label>
    <input type="password" class="form-control" id="sifre" name="sifre">
  </div>

 
    
    
  
  <button type="submit p-5" class="btn btn-primary " name="giris" style="width: 100px;">GİRİŞ YAP</button>
</form>
      </div>
    </div>


    
  </body>
</html>
<?php
    
    include("baglanti.php");


if(isset($_POST["giris"])) {
    $kullanici = mysqli_real_escape_string($baglan, $_POST["kullanici"]);
    $sifre = mysqli_real_escape_string($baglan, $_POST["sifre"]);
    
    $sorgu = "SELECT * FROM kayit WHERE kullaniciAdi='$kullanici' AND parola='$sifre'";
    $calistir = mysqli_query($baglan, $sorgu);
    
    if(mysqli_num_rows($calistir) > 0) {
        
        header("Location: index.php");
        exit; 
    } else {
        
        echo '<div class="alert alert-danger" role="alert">
        Kullanıcı Adı veya Şifre Yanlış!
      </div>';
    }
}
  
    ?>