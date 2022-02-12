<?php

$database = new mysqli("localhost","root","","training");

if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}

if(isset($_POST['register'])){
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $gender = $_REQUEST['gender'];
    $education = $_REQUEST['education'];
    $address = $_REQUEST['address'];

    $password = md5($_REQUEST['password']);
    $confirmpass = md5($_REQUEST['confirmpass']);

    if($password !== $confirmpass){
      $error = "Password Did Not Match";
    }
    else{
      if($firstname !== "" || $lastname !== "" || $email !== ""){
        $query = "INSERT INTO `user`(`firstname`, `lastname`, `email`, `phone`, `gender`, `education`, `address`, `password`) VALUES ('$firstname','$lastname','$email','$phone','$gender','$education','$address','$password')";

        $excute = $database->query($query);

        if($excute == True){
          $sucess = "User Created Successfully!";
        }
        else{
          $error = "Something Went wrong";
        }
      }
      else{
        $error = "Fields are required";
      }
    }
}


?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sign up</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="./images/favicon.jpg">
        <link rel="stylesheet" href="./css/style.css">
        <!--Bootstrap cdn-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <style>
          .container{
            width:720px !important;
          }
          
        </style>
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
                          <a class="nav-link" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="team.html">Team</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="signup.html">Sign Up</a>
                        </li>
                      </ul>
                    </div>
                  </div>
              </nav>
        </header>
        <main>
            <div class="container">
              <form action="" method="post">
                <h1 class="text-info mt-5 text-center border-bottom pb-5 border-primary">Sign Up</h1>
                <div class="row mt-5">

                  <div class="col-md-6">
                    <input type="text" class="form-control shadow-none mb-3" placeholder="First Name*" name="firstname" required>
                    <input type="email" class="form-control shadow-none mb-3" placeholder="Email*" name="email" required>
                    <select class="form-select shadow-none mb-3" name="gender">
                      <option selected>Gender</option>
                      <option value="man">Man</option>
                      <option value="women">Women</option>
                      <option value="other">Other</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control shadow-none mb-3" placeholder="Last Name*" name="lastname" required>
                    <input type="text" class="form-control shadow-none mb-3" placeholder="Phone Number" name="phone">
                    <div class="form-check form-check-inline mt-2">
                      <input class="form-check-input" type="radio" name="education" value="student">
                      <label class="form-check-label">Student</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="education" value="graduate">
                      <label class="form-check-label">Graduate</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <textarea class="form-control shadow-none mb-3" rows="3" placeholder="Address" name="address" ></textarea>
                  </div>
                  <div class="col-md-6">
                    <input type="password" class="form-control shadow-none" placeholder="Password*" required name="password">
                  </div>
                  <div class="col-md-6">
                    <input type="password" class="form-control shadow-none" placeholder="Confirm Password*" required name="confirmpass">
                  </div>
                  
                </div>
                <div class="d-grid gap-2 mt-4">
                  <button class="btn btn-outline-success" type="submit" name="register">Register</button>
                </div>
              </form>
              <h5 class="text-danger mt-2">
              <?php if(!empty($error)){echo $error;}?>
              </h5>
              <h5 class="text-success mt-2">
              <?php if(!empty($sucess)){echo $sucess;}?>
              </h5>
            </div>
        </main>
        <footer>

        </footer>
        
    </body>
</html>