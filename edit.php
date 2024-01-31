<?php
include 'koneksi.php';
$select = mysqli_query($conn, "SELECT * FROM user WHERE id_user='" . $_GET['iduser'] . "' ");
$data = mysqli_fetch_array($select);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data</title>
</head>

<body>
    <h2>Form Edit Data</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <table border="1">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="user" value="<?php echo $data['username'] ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="pass" value="<?php echo $data['password'] ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="ttl" value="<?php echo $data['ttl'] ?>"></td>
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

        $simpan = mysqli_query($conn, "UPDATE user SET
            nama ='".$nama."',
            username ='".$user."',
            password ='".$pass."',
            ttl ='".$ttl."'
            where id_user='" . $_GET['iduser'] . "'
        ");
        if($simpan){
            header('location:index.php');
        }else{
            echo "Gagal Edit";
        }
    }
    ?>
</body>

</html>