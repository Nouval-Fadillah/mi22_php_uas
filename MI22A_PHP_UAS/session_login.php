<?php
session_start();
if (!isset($_SESSION['user'])) {
  $_SESSION['error'] = "Login dulu ngab";
  header('location: login.php');
}
?>