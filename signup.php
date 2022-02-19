<?php
$pagetitle = "Sign Up";
include('header.php');

if($_SESSION["loggedin"] == "loggedin"){
  header("location: index.php");
  exit();
}
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
        
        $cquery = "SELECT `id` FROM `user` WHERE `email` = '$email' OR `phone` = '$phone'";

        $rsl = $database->query($cquery);

        $cnt = mysqli_num_rows($rsl);

        if($cnt == 1){
          $error = "Email Or Phone Already Exist";
        }
        else{
          $query = "INSERT INTO `user`(`firstname`, `lastname`, `email`, `phone`, `gender`, `education`, `address`, `password`) VALUES ('$firstname','$lastname','$email','$phone','$gender','$education','$address','$password')";

          $excute = $database->query($query);

          if($excute == True){
            header('Location: index.php');
          }
          else{
            $error = "Something Went wrong";
          }
        }
        
      }
      else{
        $error = "Fields are required";
      }
    }
}



?>

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