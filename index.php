<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh CRUD</title>
</head>

<body>
    <h2>Form Tampil Data</h2>
    <h4><a href="tambah.php">Tambah Data</a></h4>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Username</td>
            <td>Password</td>
            <td>Tanggal Lahir</td>
            <td>Aksi</td>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $tampil = mysqli_query($conn, "SELECT * FROM user ORDER BY id_user");
        while($d = mysqli_fetch_array($tampil)){
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $d['nama']?></td>
            <td><?php echo $d['username']?></td>
            <td><?php echo $d['password']?></td>
            <td><?php echo $d['ttl']?></td>
            <td>
                <a href="edit.php?iduser=<?php echo $d['id_user']?>">Edit</a>
                <a href="hapus.php?iduser=<?php echo $d['id_user']?>">Hapus</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>

</html>