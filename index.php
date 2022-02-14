<?php
$pagetitle = "Home";
include('header.php');

?>
        <main>
          <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="./images/slide1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h1 class="heading-1">We are best at Web Development</h1>
                  <p class="heading-1">Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="./images/slide2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h1 class="heading-2">Join us today for better Innovation</h1>
                  <p class="heading-2">Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./images/slide3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h1 class="heading-3">Best IT Support in Town</h1>
                  <p class="heading-3">Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="container mt-5 text-center custom-class">
            <h1 class="fw-light text-uppercase border-bottom border-success pb-2 d-inline">About Our Company</h1>
            <p class="mt-5 fs-5 fw-lighter">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
          </div>
          <div class="container-fluid mt-5 custom-background pt-3 pb-3">
            <div class="row">
              <div class="col-md-6 align-self-center">
                <img src="./images/about.jpg" class="img-fluid rounded" alt="about">
              </div>
              <div class="col-md-6 custom-class align-self-center">
                <h2 class="text-center fw-normal mt-3 mt-sm-0">What we do?</h2>
                <p class="fw-lighter">
                  There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                </p>
              </div>
            </div>
          </div>
          <div class="container mt-5 text-center custom-class">
            <h1 class="fw-light text-uppercase border-bottom border-success pb-2 d-inline">Our Services</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
              <div class="col">
                <div class="card pt-3 icon-color own-shadow">
                  <i class="fas fa-american-sign-language-interpreting fa-5x"></i>
                  <div class="card-body">
                    <h5 class="card-title border-top pt-2 fw-bold">Website Design</h5>
                    <p class="card-text fw-light">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card pt-3 icon-color own-shadow">
                  <i class="fas fa-analytics fa-5x"></i>
                  <div class="card-body">
                    <h5 class="card-title border-top pt-2 fw-bold">Software Development</h5>
                    <p class="card-text fw-light">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card pt-3 icon-color own-shadow">
                  <i class="fab fa-algolia fa-5x"></i>
                  <div class="card-body">
                    <h5 class="card-title border-top pt-2 fw-bold">Graphics Design</h5>
                    <p class="card-text fw-light">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card pt-3 icon-color own-shadow">
                  <i class="fab fa-app-store-ios fa-5x"></i>
                  <div class="card-body">
                    <h5 class="card-title border-top pt-2 fw-bold">App Development</h5>
                    <p class="card-text fw-light">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card pt-3 icon-color own-shadow">
                  <i class="fas fa-steering-wheel fa-5x"></i>
                  <div class="card-body">
                    <h5 class="card-title border-top pt-2 fw-bold">IT Support</h5>
                    <p class="card-text fw-light">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card pt-3 icon-color own-shadow">
                  <i class="fas fa-atom fa-5x"></i>
                  <div class="card-body">
                    <h5 class="card-title border-top pt-2 fw-bold">Call Center</h5>
                    <p class="card-text fw-light">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="container mt-5 text-center custom-class">
            <h1 class="fw-light text-uppercase border-bottom border-success pb-2 d-inline">Our Professionals</h1>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-5">
              <div class="col">
                <img src="./images/team/1.jpg" alt="member1" class="img-fluid rounded-circle team-image">
                <h2 class="text-info fw-normal">Jowel Mia</h2>
                <h5 class="mb-3 fw-lighter">Managing Director</h5>
                <a target="_blank" href="https://www.facebook.com/Fun2uze/"><i class="fab fa-facebook me-1 fa-2x" style="color:#02238b"></i></a>
                <a target="_blank" href="https://twitter.com/sabbir073"><i class="fab fa-twitter me-1 fa-2x" style="color:#1c9cea"></i></a>
                <a target="_blank" href="#"><i class="fab fa-instagram me-1 fa-2x" style="color:#d6314d"></i></a>
                <a target="_blank" href="#"><i class="fab fa-linkedin me-1 fa-2x" style="color:#0a1e30"></i></a>
                
              </div>
              <div class="col">
                <img src="./images/team/2.jpg" alt="member1" class="img-fluid rounded-circle team-image">
                <h2 class="text-info fw-normal">Shadhin Das</h2>
                <h5 class="mb-3 fw-lighter">Finance Director</h5>
                <a target="_blank" href="https://www.facebook.com/Fun2uze/"><i class="fab fa-facebook me-1 fa-2x" style="color:#02238b"></i></a>
                <a target="_blank" href="https://twitter.com/sabbir073"><i class="fab fa-twitter me-1 fa-2x" style="color:#1c9cea"></i></a>
                <a target="_blank" href="#"><i class="fab fa-instagram me-1 fa-2x" style="color:#d6314d"></i></a>
                <a target="_blank" href="#"><i class="fab fa-linkedin me-1 fa-2x" style="color:#0a1e30"></i></a>
                
              </div>
              <div class="col">
                <img src="./images/team/3.jpg" alt="member1" class="img-fluid rounded-circle team-image">
                <h2 class="text-info fw-normal">Rafiqul Islam</h2>
                <h5 class="mb-3 fw-lighter">Technical Officer</h5>
                <a target="_blank" href="https://www.facebook.com/Fun2uze/"><i class="fab fa-facebook me-1 fa-2x" style="color:#02238b"></i></a>
                <a target="_blank" href="https://twitter.com/sabbir073"><i class="fab fa-twitter me-1 fa-2x" style="color:#1c9cea"></i></a>
                <a target="_blank" href="#"><i class="fab fa-instagram me-1 fa-2x" style="color:#d6314d"></i></a>
                <a target="_blank" href="#"><i class="fab fa-linkedin me-1 fa-2x" style="color:#0a1e30"></i></a>
                
              </div>
              <div class="col">
                <img src="./images/team/4.jpg" alt="member1" class="img-fluid rounded-circle team-image">
                <h2 class="text-info fw-normal">Rijon Mia</h2>
                <h5 class="mb-3 fw-lighter">Admin Officer</h5>
                <a target="_blank" href="https://www.facebook.com/Fun2uze/"><i class="fab fa-facebook me-1 fa-2x" style="color:#02238b"></i></a>
                <a target="_blank" href="https://twitter.com/sabbir073"><i class="fab fa-twitter me-1 fa-2x" style="color:#1c9cea"></i></a>
                <a target="_blank" href="#"><i class="fab fa-instagram me-1 fa-2x" style="color:#d6314d"></i></a>
                <a target="_blank" href="#"><i class="fab fa-linkedin me-1 fa-2x" style="color:#0a1e30"></i></a>
                
              </div>
             <!--
               <div class="col">
                <div class="mydiv">
                  <img src="./images/team/4.jpg" alt="member1" class="myimage img-fluid rounded-circle">
                  <h2 class="text-info fw-normal mt-5">Rijon Mia</h2>
                <h5 class="mb-3 fw-lighter">Admin Officer</h5>
                <a target="_blank" href="https://www.facebook.com/Fun2uze/"><i class="fab fa-facebook me-1 fa-2x" style="color:#02238b"></i></a>
                <a target="_blank" href="https://twitter.com/sabbir073"><i class="fab fa-twitter me-1 fa-2x" style="color:#1c9cea"></i></a>
                <a target="_blank" href="#"><i class="fab fa-instagram me-1 fa-2x" style="color:#d6314d"></i></a>
                <a target="_blank" href="#"><i class="fab fa-linkedin me-1 fa-2x" style="color:#0a1e30"></i></a>
                </div>
              </div>
             --> 
            </div>
          </div>
          <div class="container mt-5 text-center custom-class">
            <h1 class="fw-light text-uppercase border-bottom border-success pb-2 d-inline">Get In Touch</h1>
          </div>
          <div class="container mt-5">
            
            <div class="row">
              <div class="col-md-6">
                <form>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Write Your Name">
                  </div>
                  <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Write Your Email">
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="subject">
                  </div>
                  <div class="mb-3">
                   <textarea class="form-control" name="message" cols="30" rows="10"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary btnbtn">Send To Us</button>
                </form>
              </div>
              <div class="col-md-6" style="height: 500px;">
                <div id="map"></div>
              </div>
            </div>
          </div>
        </main>
        <footer>
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
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxHRBU_I-JXkZRv1HLG3uoaEV_Pa_HC14&callback=initMap&v=weekly&channel=2"
      async
    ></script>
    <script>
     
    </script>
        
    </body>
</html>