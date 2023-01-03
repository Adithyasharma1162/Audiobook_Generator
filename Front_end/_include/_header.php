<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lission | Audio Book Generator</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="./css/main.css">

  <script>
      $(document).ready(function(){
        $(".sidenav").sidenav();
      });
  </script>
</head>
<body>
  <!--Navigation-->
<nav class="teal" style="padding:0px 10px;">
  <div class="container">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Lission</a>
      <a href="#" class="sidenav-trigger" data-target="mobile-nav">
        <i class="material-icons">menu</i>
      </a>
      <ul class="right hide-on-med-and-down "  >
        <li class="uline" ><a href="index.php">Home</a></li>
        <li class="uline" ><a href="login.php">Login</a></li>
        <li class="uline" ><a href="logout.php">Logout</a></li>
        <li class="uline" ><a href="signup.php">Signup</a></li>
        <li class="uline" ><a href="contact.php">Request Audio Book</a></li>
      </ul>
    </div>
  </div>
</nav>
<ul class="sidenav" id="mobile-nav">
  <li><a href="index.php">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="signup.php">Projects</a></li>
  <li><a href="contact.php">Request Audio Book</a></li>
</ul>';
?>