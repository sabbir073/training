
<?php
$pagetitle = "Contact Us";
include('header.php');

?>
<style>
    .card{
      height:300px !important;
    }
</style>
        <div class="p-5 mb-4 custombg rounded-3">
          <div class="container-fluid py-5">
            <center><h1 class="fw-light text-white text-uppercase border-bottom border-success pb-2 d-inline">Contact us</h1></center>
          </div>
        </div>
        <main>
            <div class="row">
              <div class="col-md-12" style="height: 350px;">
                <div id="map"></div>
              </div>
            </div>
            <div class="container">
            <div class="row">
              <div class="col">
                <div class="card pt-3 icon-color own-shadow">
                  <div class="card-body">
                    <center>
                      <h1 class="card-title pt-2 pb-2 fw-bold">Head Office</h1>
                    <p class="card-text fw-light h3">House-45, Road-07,<br> Sector-04, Uttara,<br> Dhaka 1230.</p>
                    </center>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card pt-3 icon-color own-shadow">
                  <div class="card-body">
                    <center>
                      <h1 class="card-title pt-2 pb-2 fw-bold">Branch Office</h1>
                    <p class="card-text fw-light h3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </center>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card pt-3 icon-color own-shadow">
                  <div class="card-body">
                    <center>
                      <h1 class="card-title pt-2 pb-2 fw-bold">Office Abroad</h1>
                    <p class="card-text fw-light h3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
        <div class="container mt-5">
          <center>
                <div class="row">
                  <div class="col-sm-8 offset-sm-2">
                    <div>
                      <h2>Get in Touch</h2>
                    </div>
                    <form method="post" action="">
                      <div class="form-group">
                        <input type="text" class="form-control my-3" name="name" placeholder="Name*" required>
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control my-3" name="email" placeholder="Email*" required>
                      </div>
                      <div class="form-group">
                        <input type="tel" class="form-control my-3 " name="phone" placeholder="Phone" >
                      </div>
                      <div class="form-group">
                        <textarea class="form-control my-3" name="message" placeholder="Message" rows="10"></textarea>
                      </div>
                      <div>
                        <button type="submit" class="btn btn-lg btn-info">CONTACT US</button>
                      </div>
                    </form>
                  </div>
                </div>
          </center>
        </div>
        <footer class="mt-5 border-top pt-5">
          <div class="container-fluid">
            <div class="row mb-3 border-bottom border-1 pb-5">
              <div class="col-md-3">
                <img src="./images/logo.png" alt="logo" class="img-fluid">
                <p class="fw-light">
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                </p>
              </div>
              <div class="col-md-3">
                <h5 class="fw-bold list-group-item">Company</h5>
                <ul class="list-group">
                  <li class="list-group-item"><a class="text-decoration-none text-dark" href="#">Cras justo odio</a></li>
                  <li class="list-group-item"><a class="text-decoration-none text-dark" href="#">Cras justo odio</a></li>
                  <li class="list-group-item"><a class="text-decoration-none text-dark" href="#">Cras justo odio</a></li>
                  <li class="list-group-item"><a class="text-decoration-none text-dark" href="#">Cras justo odio</a></li>
                  <li class="list-group-item"><a class="text-decoration-none text-dark" href="#">Cras justo odio</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h5 class="fw-bold list-group-item">Quick LInks</h5>
                <ul class="list-group">
                  <li class="list-group-item"><a class="text-decoration-none text-dark" href="#">Cras justo odio</a></li>
                  <li class="list-group-item"><a class="text-decoration-none text-dark" href="#">Cras justo odio</a></li>
                  <li class="list-group-item"><a class="text-decoration-none text-dark" href="#">Cras justo odio</a></li>
                  <li class="list-group-item"><a class="text-decoration-none text-dark" href="#">Cras justo odio</a></li>
                  <li class="list-group-item"><a class="text-decoration-none text-dark" href="#">Cras justo odio</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h5 class="fw-bold list-group-item">Important Menus</h5>
                <ul class="list-group">
                  <li class="list-group-item"><a class="text-decoration-none text-dark" href="#">Cras justo odio</a></li>
                  <li class="list-group-item"><a class="text-decoration-none text-dark" href="#">Cras justo odio</a></li>
                  <li class="list-group-item"><a class="text-decoration-none text-dark" href="#">Cras justo odio</a></li>
                  <li class="list-group-item"><a class="text-decoration-none text-dark" href="#">Cras justo odio</a></li>
                  <li class="list-group-item"><a class="text-decoration-none text-dark" href="#">Cras justo odio</a></li>
                </ul>
              </div>
            </div>
          </div>
            <div class="row text-center custom-background align-self-center copyright">
              <div class="col-md-12">
                <p>Copyright@2022. All right Reserved</p>
              </div>
            </div>
        </footer>
        
        <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxHRBU_I-JXkZRv1HLG3uoaEV_Pa_HC14"
      async
    ></script>
        
    </body>
</html>