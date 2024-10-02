<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

  <title>TO DO LİST</title>
  <link rel="stylesheet" href="css.css">
  
  
  
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body>
 

  <nav class="navbar navbar-light" style="background-color:cadetblue">
    <div class="container">
      <a class="navbar-brand" href="#">To Do LİST</a>
    </div>
  </nav>

  <div>
    <?php
    // session_start();
    // if (!empty($_SESSION["durum"]) && $_SESSION["durum"] == 1) {
    //   echo "<div class='alert alert-success'>Kayıt başarıyla eklendi.</div>";
    //   unset($_SESSION["durum"]);
    // } elseif (!empty($_SESSION["durum"]) && $_SESSION["durum"] != 1) {
    //   echo "<div class='alert alert-danger'>Kayıt sırasında sorun oluştu.</div>";
    //   unset($_SESSION["durum"]);
    // }
  
  ?></div>
  <form action="index.php" method="post">


  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="input-group mb-3">
          <input type="text"
          class="form-control"
          id="inputfield"
          placeholder="görevler" name="gorevgirme">
         
          <button type="sumbit" class="btn btn-info" style="background-color: cadetblue;" id="addToDo" name="ekle" >
            <i class="fa fa-add"></i>
  
          </button>
          
        </div>
        
        <div id="toDoContainer"></div>
        <!-- <button type="button" class="btn btn-success" style="width: 100px;" id="saveButton">Success</button> -->
      </div>
    </div>
  </div>
    </form>
<script src="javaScript.js"></script>
</body>

</html>
   
<?php
include("baglanti.php");




if(isset($_POST["ekle"])){
  
  $gorevgirme = mysqli_real_escape_string($baglan, $_POST["gorevgirme"]);
  $gekle="INSERT INTO gorevler(giris) VALUES('$gorevgirme')";
  $calistir=mysqli_query($baglan,$gekle);

}




?>