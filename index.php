<!-- 
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($this->con'SELECT * FROM nama');
        while ($data = mysqli_fetch_array($query)) {
        ?>

<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Dari Database PHP </title>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body>
    <h2>Menampilkan Data Dari Database PHP</h2>
    <table>
        <thead>
            <tr>
                <td>no</td>
                <td>nip</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>tanggal lahir</td>
                <td>status</td>            
                <td>mulai kerja</td>
            </tr>
        </thead>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['jns_kel'] ?></td>
                <td><?php echo $data['tgl_lahir'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html> -->