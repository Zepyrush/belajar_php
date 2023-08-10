<?php

define("host", "localhost");
define("Username", "root");
define("Password", "");
define("Database", "belajar_php");

$kon = mysqli_connect(host, Username, Password, Database);

// if($kon) {
//     echo("<h1>koneksi sukses</h1>");
// } else {
//     echo("<h1>Koneksi Gagal</h1>");
// } 