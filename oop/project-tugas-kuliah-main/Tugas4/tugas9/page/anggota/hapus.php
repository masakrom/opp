<?php
    $id = $_GET['id'];
    $koneksi->query("DELETE FROM anggota WHERE nim = '$id'");


echo "<script>window.location.href='?page=anggota';</script>";

?>