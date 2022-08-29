<?php
include 'koneksi.php';
$db= new database();
$db->Connect();

$pegawai=$db->GetData_All("SELECT *, YEAR(CURDATE()) - YEAR(mulai_kerja) as usia FROM db_pegawai HAVING usia BETWEEN 6 AND 10;");

?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Nama Kelompok :</h1><br>
    <h2>Rafly Agustri</h2><br>
    <h3>Nadia Tania</h3><br>
    <h4>Muhammad Ariansyah</h4>
    <table>
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Status</th>
                <th>Mulai Kerja</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($pegawai as $peg) :?>
            <tr>
                <td><?= $peg['nip'] ?></td>

                <td>  <?= $peg['nama'] ?></td>

                <td> <?= $peg['jns_kel'] ?></td>

                <td><?= $peg['tgl_lahir'] ?> </td>

                <td><?= $peg['status'] ?></td>
                
                <td><?= $peg['mulai_kerja'] ?></td>
                
            <?php endforeach?>
        </tbody>
    </table>
</body>
</html>


 