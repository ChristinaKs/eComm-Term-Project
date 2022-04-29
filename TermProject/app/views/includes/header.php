<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title><?php echo SITENAME; ?></title>
</head>

<body style="background-color: #09B07B;">

<nav class="navbar navbar-expand-lg" style="background-color: #003314; ">
  <div class="image" style="display: block; margin: 0 auto;">
    <?php
      echo '<img src="'.URLROOT.'/public/img/Logo.png" width="250" height="250"></img>';
    ?>
  </div>
</nav>


  <div class="container" >

  <nav class="navbar navbar-expand-lg navbar-light" style="font-family: cursive; background-color: #256B55;">


<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link" href="/TermProject/Home">Home</a>
    </li>
    <?php
    //if(!isAdminLoggedIn()){
      echo '<li class="nav-item"><a class="nav-link" href="/TermProject/Contact">Contact</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="/TermProject/About">About Us</a></li>';
    
    ?>
  </ul>

  <ul class="nav navbar-nav navbar-right">
    <li class="nav-item">
      <a class="nav-link" href="/TermProject/userCart/displayCart">My cart</a>
    </li>
    <?php
    if (isLoggedIn()) {
      echo '<li class="nav-item"><a class="nav-link" href="/TermProject/Profile/profile"><i class="fa-solid fa-profile"></i> My Profile </a></li>';
      echo '<li class="nav-item"><a class="nav-link" href="/TermProject/Profile/profile"><i class="fa-solid fa-profile"></i> Français </a></li>';
    } 
    if (isLoggedIn() || isAdminLoggedIn()) {
      echo '<li class="nav-item"><a class="nav-link" href="/TermProject/Login/logout"><i class="fa-solid fa-sign-out"></i> Logout </a></li>';
    } 
    else {
      echo '<li class="nav-item"><a class="nav-link" href="/TermProject/Login/Create"><i class="fa-solid fa-user-plus"></i> Sign Up</a></li>
          <li class="nav-item"><a class="nav-link" href="/TermProject/Login/"><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>';
    }
    ?>
  </ul>

</div>
</nav>
