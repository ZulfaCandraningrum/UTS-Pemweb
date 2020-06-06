<?php

$koneksi = mysqli_connect("localhost", "root","");
if(!$koneksi){
    echo "err : " . mysqli_error($koneksi);
}