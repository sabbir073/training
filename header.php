<?php
session_start();

if(empty($_SESSION["loggedin"])){
  $_SESSION["loggedin"] = "";
}
?>

<style>
  @media (max-width: 576px) {
    .abcclass{
      margin-left:25%;
      margin-top:10px;
      margin-bottom: 10px;
    }
 }
</style>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $pagetitle;?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="./images/favicon.jpg">
        <link rel="stylesheet" href="./css/style.css">
        <!--Bootstrap cdn-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
                <!-- Navbar content -->
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="./images/logo.png" alt="logo" class="img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link <?php if($pagetitle == 'Home'){echo 'active';}?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link <?php if($pagetitle == 'About Us'){echo 'active';}?>" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link <?php if($pagetitle == 'Services'){echo 'active';}?>" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($pagetitle == 'Our Team'){echo 'active';}?>" href="team.php">Team</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link <?php if($pagetitle == 'Contact Us'){echo 'active';}?>" href="contact.php">Contact</a>
                        </li>
                        <?php if ($_SESSION["loggedin"] !== "loggedin"){ ?>
                          <li class="nav-item">
                          <a class="nav-link <?php if($pagetitle == 'Login'){echo 'active';}?>" href="login.php">Login</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link <?php if($pagetitle == 'Sign Up'){echo 'active';}?>" href="signup.php">Sign Up</a>
                      </li>
                       <?php }
                        else{ ?>
                          <li class="nav-item">
                          <a class="nav-link" href="logout.php">Logout</a>
                      </li>
                        <?php
                        }
                        ?>

                        

                      </ul>
                    </div>
                    <?php if (!empty($_SESSION["username"])){
                    ?>

                    <div class="abcclass badge bg-primary text-white align-self-center">
                    <b><?php echo 'Welcome ' . $_SESSION["username"];  ?></b>
                    </div>

                    <?php
                    }
                    ?>
                    
                    
                  
                  </div>
                  
              </nav>
        </header>