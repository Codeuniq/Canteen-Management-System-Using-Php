<?php
session_start();
unset($_SESSION["pwd"]);
unset($_SESSION["id"]);
header("Location:login.php");
?>