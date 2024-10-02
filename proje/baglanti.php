<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Veritabanına bağlanma
$baglan = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($baglan->connect_error) {
    die("Bağlantı hatası: " . $baglan->connect_error);
}

