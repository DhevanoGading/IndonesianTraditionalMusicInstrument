<?php

$conn = mysqli_connect('localhost','root','','musik');

if(!$conn){
    echo 'Login gagal';
    exit();
}