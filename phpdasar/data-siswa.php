<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Data siswa</h3>

    <a href="input-data-siswa.php">Tambah Siswa</a>
    <table border = "1">
        <thead>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            
            $sql = "SELECT*FROM siswa";
            $query = mysqli_query($kon, $sql);
            
            if($query > 0){
                while ($result = mysqli_fetch_assoc($query)){
                    echo "<tr>";
                    echo "<td>{$result['nis']}</td>";
                    echo "<td>{$result['nama']}</td>";
                    echo "<td>{$result['kelas']}</td>";
                    echo "<td>edit | hapus </td>";
                    echo "</tr>";
                    
                    
                }
            }

            ?>
</body>
</html>