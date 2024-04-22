<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Navbar -->
    <section class="nav-section nav-bg">
        <div class="container">
            <nav class="navbar navbar-expand-lg p-3">
                <div class="container-fluid">
                  <a class="navbar-brand text-white fs-2 fw-bolder" href="./index.php"><i class="fa-brands fa-drupal"></i>DISCON</a>
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <li class="nav-item dropdown  ">
                      <a class="nav-link dropdown-toggle  text-white fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./hotel.php">Hotels & Travels</a></li>
                        <li><a class="dropdown-item" href="./beauty.php">Restaurant & Cafe</a></li>
                        <li><a class="dropdown-item" href="./health.php">Health & Fitnes</a></li>
                      </ul>
                    </li>
                  </ul>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Sign In
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">
                            <form class="w-575" action="" method="POST">
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                              </div>
                              <button name="submit" type="submit" class="btn btn-outline-primary">Sign up</button>
                            </form>
                          </a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Get the Discon App</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="./sell.php">Sell on Discon</a>
                      </li>
                  </div>
                </div>
              </nav>
              <div class="row p-5">
                <div class="col-10 mx-auto">
                    <h1 class="text-center mb-5 text-white"><i class="fa-brands fa-drupal"></i>Deals that connect Bangladesh</h1>
                    <form action="" method="POST">
                      <div class="row mb-1 justify-content-center align-items-center">
                        <div class="col-10">
                        <input type="text" name="searchdb" class="form-control form-size text-center"  placeholder="Search Discon " >
                        </div>
                        <div class="col-2">
                        <button name="search" type="submit" class="btn btn-light fw-bold">Search <i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        </div>
                      </form>
                </div>
              </div>
          </div>
    </section>

    <!-- Hotels -->
    <section class="category-section mt-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-10 mx-auto">
              <div class="row p-4 justify-content-between ">
                <h2 class=" mb-5 text-center"><strong class="fw-bold"><i class="fa-solid fa-utensils fa-beat me-2"></i>Restaurants</strong></h2>
                <div class="col-3">
                    <div class="card custom-card" >
                        <img src="./img/e4.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-text fw-bold">Cilantro Restaurant & cafe</h5>
                            <p>Satmashjid, Dhaka</p>
                            
                            <h6>4.4<i class="fa-solid fa-star text-warning ms-2"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star-half-stroke text-warning"></i></h6>
                            <p>restaurant</p>
                            <h5 class="fw-bold"><strong class="me-2">Tk</strong>5550</h5>
                            <a href="./deal.php" class="btn btn-outline-info">Click Here</a>
                        </div>
                        </div>
                </div>
                <div class="col-3">
                    <div class="card custom-card" >
                        <img src="./img/e5.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-text fw-bold">Izumi Japanese Kitchen</h5>
                            <p>Gulshan, Dhaka</p>
                            
                            <h6>4.4<i class="fa-solid fa-star text-warning ms-2"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star-half-stroke text-warning"></i></h6>
                            <p>Restaurant</p>
                            <h5 class="fw-bold"><strong class="me-2">Tk</strong>5000</h5>
                            <a href="./deal.php" class="btn btn-outline-info">Click Here</a>
                        </div>
                        </div>
                </div>
                <div class="col-3">
                                            <div class="card custom-card" >
                        <img src="./img/e8.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-text fw-bold">Alfresco : taste authenticity</h5>
                            <p>Dhanmondi, Dhaka</p>
                            
                            <h6>4.4<i class="fa-solid fa-star text-warning ms-2"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star text-warning"></i><i class="fa-solid fa-star-half-stroke text-warning"></i></h6>
                            <p>restaurant</p>
                            <h5 class="fw-bold"><strong class="me-2">Tk</strong>4500</h5>
                            <a href="./deal.php" class="btn btn-outline-info">Click Here</a>
                        </div>
                        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

     <!-- Footer -->
<section class="footer-section nav-bg mt-5">
<div class="container  my-5">
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h4 class="text-uppercase mb-4 fw-bold">
            <i class="fa-brands fa-drupal"></i>DISCON
            </h4>
            <p>
            Deals that connect Bangladesh
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
            <p>
              <a class="text-white">Hotel & restaurant</a>
            </p>
            <p>
              <a class="text-white">Beauty & Spa</a>
            </p>
            <p>
              <a class="text-white">Gym & Fitness</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Useful links
            </h6>
            <p>
              <a class="text-white">Become an Affiliate</a>
            </p>
            <p>
              <a class="text-white">Shipping Rates</a>
            </p>
            <p>
              <a class="text-white">Help</a>
            </p>
          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> Dhaka,Bangladesh</p>
            <p><i class="fas fa-envelope mr-3"></i> discon@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 0123456789</p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
            © 2023 DISCON, Inc. All Rights Reserved.
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
            <!-- Facebook -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-facebook-f"></i
              >
            </a>

            <!-- Twitter -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>
          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
</div>
</section>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


<?php
include 'connection.php';
/* For sign up */
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $userpass = $_POST['pass'];


  /* insert query */
  $insertquery =" insert into sign(email,password) values('$email','$userpass')";


  $res = mysqli_query($con,$insertquery);

  if($res){
    ?>
    <script>
      alert("Data inserted Properly");
    </script>
    <?php
  }else{
    ?>
    <script>
      alert("failed");
    </script>
    <?php
  }
}

/* For search */
if(isset($_POST['search'])){
  $usersearch = $_POST['searchdb'];
  /* insert query */
  $insertquery =" insert into searchbar(search) values('$usersearch')";


  $res = mysqli_query($con,$insertquery);

  if($res){
    ?>
    <script>
      alert("Data inserted Properly");
    </script>
    <?php
  }else{
    ?>
    <script>
      alert("failed");
    </script>
    <?php
  }
}
?>