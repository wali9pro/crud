<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h2>Form Tambah Data</h2>
    <form action="" method="POST" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="user" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="text" name="pass" required></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="ttl" required></td>
        </tr>
    </table>
    <button><a href="index.php">Kembali</a></button>
    <button type="submit" name="submit"><a href="index.php"></a>Simpan</button>
    </form>
    <?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $ttl = $_POST['ttl'];

        $simpan = mysqli_query($conn, "INSERT INTO user VALUES (
            null,
            '".$nama."',
            '".$user."',
            '".$pass."',
            '".$ttl."'
        )");
        if($simpan){
            header('location:index.php');
        }else{
            echo "Gagal Simpan";
        }
    }
    ?>
</body>
</html>