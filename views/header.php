<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/style.css">
    <title>Document</title>
</head>
<body>
  <h1>Blog Sekolah Koding</h1>
  <div id="menu">
    <a href="index.php">Home</a>
    <a href="add.php">Tambah</a>
    <a href="register.php">Register</a>
    <?php if ($_SESSION === array()){ ?>
      <a href="login.php">Login</a>
    <?php } ?>
    <?php if (!($_SESSION === array())){ ?>
      <a href="logout.php">Logout</a>
    <?php } ?>
  </div>