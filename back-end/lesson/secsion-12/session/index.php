<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "Trang chủ";
session_start();
//echo $is_login;
if(isset($_SESSION['is_login'])) {
    echo $_SESSION['is_login'];
} else {
    header("Location: login.php");
}


