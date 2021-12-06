<?php
global $koneksi;

$koneksi = mysqli_connect("localhost", "root", "", "contact");

if(!$koneksi)
{
    echo 'Tidak dapat terhubung ke database';
    die();
}
?>