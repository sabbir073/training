<?php
$pagetitle = "Login";
include('header.php');
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
                    <form method="post" action="new.php">
                      <div class="mb-4">
                        <label for="username" class="form-label">Your Email</label>
                        <input type="email" class="form-control" required name="username">
                      </div>
                      <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                      </div>
                      <div class="d-grid">
                        <button type="submit" class="btn text-light main-bg" name="submit">Login</button>
                      </div>
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