<?php
$db = mysqli_connect("localhost", "root", "", "wilayah");

if(!$db){
    die('koneksi gagal');
}