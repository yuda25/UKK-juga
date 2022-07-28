<?php
session_start();

if(session_destroy()){
    echo "you are succes logout";
    header('location:i-login.php');
}
?>