<?php
include 'koneksi.php';
if(isset($_GET['iduser'])){
    $hapus = mysqli_query($conn, "DELETE FROM user WHERE id_user='".$_GET['iduser']."' ");
    header('location:index.php');
}
?>