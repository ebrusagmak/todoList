<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kayıt Ol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    .button-container {
  display: flex;
  justify-content: center; /* Butonları yatayda ortalamak için */

}
.btn{
  margin-top: 20px;
  margin-right: 10px;
 
 
}

  </style>
  

  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <form action="kayit.php" method="post" >
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

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email Adres</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
 
    
    
  
 
  
</form>
<div class="button-container">
<button type="submit" class="btn btn-primary"  name="kaydet">KAYIT OL</button>
  
<form action="giris.php" method="GET">
    <button type="submit" class="btn btn-primary"name="giris">GİRİŞ YAP</button>
</form>

</div>

      </div>
    </div>

    
  </body>
</html>
<?php
    // Veritabanı bağlantısı
    include("baglanti.php");

    if(isset($_POST["kaydet"])){
      // Kullanıcı girişlerini al
      $kullanici = mysqli_real_escape_string($baglan, $_POST["kullanici"]);
      $sifre = mysqli_real_escape_string($baglan, $_POST["sifre"]);
      $email = mysqli_real_escape_string($baglan, $_POST["email"]);

      // SQL sorgusunu hazırla ve çalıştır
      if(
      $_POST["kullanici"]==""||$_POST["sifre"]==""|| $_POST["email"]==""
      ){
        echo"Bu Alanlar Boş Bırakılamaz";
      }else{
      $ekle = "INSERT INTO kayit (kullaniciAdi, parola, email) VALUES ('$kullanici', '$sifre', '$email')";
      $calistir = mysqli_query($baglan, $ekle);
      }
      if($calistir){
        echo'<div class="alert alert-success" role="alert">
       Kayıt Başırılı Bir Şekilde Eklendi.
      </div>';
      header("Location: giris.php");
      }else{
        echo'<div class="alert alert-danger" role="alert">
       Kayıt Ekleme Sırasında Bir Hata Oluştu!!
      </div>';
       }
       
      

      // Sorgunun başarısını kontrol et
      // if($calistir){
      //   session_start();
      //   $_SESSION["durum"] = "1";
      //   header("Location: index.php");

      // } else {
      //   echo "<div class='alert alert-danger'>Kayıt ekleme başarısız oldu.</div>";
      // }
    }
  
    ?>