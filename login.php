<?php


$pagetitle = "Login";
include('header.php');

if($_SESSION["loggedin"] == "loggedin"){
  header("location: index.php");
  exit();
}

$database = new mysqli("localhost","root","","training");

if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}


if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = md5($_POST['password']);

    $query = "SELECT * FROM `user` WHERE `email` = '$user' and `password` = '$pass'";

    $result = $database->query($query);

    $count = mysqli_num_rows($result);

    if($count > 0){
      while($row = $result->fetch_assoc()) {
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
      }
        $_SESSION["loggedin"] = "loggedin";
        $_SESSION["username"] = $firstname . ' ' . $lastname;
        header("location: index.php");
        exit();
    }
    else{
        $error = "Email or Pawword is not correct";
    }

}



?>
<style>
          :root{
  --main-bg:#e91e63;
}

.main-bg {
  background: var(--main-bg) !important;
}

input:focus, button:focus {
  border: 1px solid var(--main-bg) !important;
  box-shadow: none !important;
}

.form-check-input:checked {
  background-color: var(--main-bg) !important;
  border-color: var(--main-bg) !important;
}

.card, .btn, input{
  border-radius:0 !important;
}
        </style>
        <main>
          <div class="container">
            <div class="row justify-content-center mt-5">
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card shadow">
                  <div class="card-title text-center border-bottom">
                    <h2 class="p-3">Login</h2>
                  </div>
                  <div class="card-body">
                    <form method="post" action="">
                      <div class="mb-4">
                        <label for="username" class="form-label">Your Email</label>
                        <input type="email" class="form-control" required name="username">
                      </div>
                      <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input maxlength="10" type="password" class="form-control" name="password" required>
                      </div>
                      <div class="d-grid">
                        <button type="submit" class="btn text-light main-bg" name="submit">Login</button>
                      </div>
                      <h5 class="text-danger mt-2">
                      <?php if(!empty($error)){echo $error;}?>
                      </h5>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
        <footer>

        </footer>
        
        <script src="" async defer></script>
        
    </body>
</html>