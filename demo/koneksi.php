<?php
$koneksi = mysqli_connect("localhost","root","","sstok");

if(!$koneksi){
    die ("koneksi gagal". mysqli_connect_error(). mysqli_connect_error());
}

?>