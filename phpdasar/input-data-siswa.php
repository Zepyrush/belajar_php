<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Input Data Siswa</h3>
<form action="" method="post">
    <label for="nis">nis</label>
    <input type="text" name='nis'>
    <br> 
    <label for="nama">nama</label>
    <input type="text" name='nama'>
    <br> 
    <label for="kelas">kelas</label>
    <input type="text" name='kelas'>
    <br><br>
    <a href="data-siswa.php"><input type="submit" name="simpan" value="simpan"></a>
</form>

<?php

if(isset($_POST['simpan'])){
include 'koneksi.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];



$sql = "INSERT INTO siswa VALUE ('$nis', '$nama', '$kelas')";
$query = mysqli_query($kon, $sql);

if ($query){
    echo"<script>alert('Input data siswa sukses')</script>";

}
else{
    echo"<script>alert('Input data siswa gagal')</script>";
}
}
?>
</body>
</html>