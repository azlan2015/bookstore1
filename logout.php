<?php

include 'config.php';

session_start();
session_unset(); // to remove all session variable
session_destroy();//destroy the session

header('location:login.php');

 ?>
