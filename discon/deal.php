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
    <section class="nav-section other-nav">
        <div class="container p-3">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                  <a class="navbar-brand text-white fs-3 fw-bold" href="./index.php"><i class="fa-brands fa-drupal"></i>DisconforMerchants</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active text-white fw-bold" aria-current="page" href="./index.php">Home</a>
                      </li>
                </div>
              </nav>
          </div>
    </section>

    <!-- Form Section -->
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="row">
                    <div class="col-6 d-block m-auto">
                        <h1 class="text-center fw-bold"><i class="fa-solid fa-sheet-plastic fa-flip me-2"></i>Fill Up the Form for Reservation</h1>
                        <form class="border-form p-5 mt-3" method="POST">
                            <div class="mb-3">
                              <input name="dflname" type="text" class="form-control"  placeholder="First & Last Name">
                            </div>
                            <div class=" row mb-3">
                              <div class="col-6">
                                <input name="demail" type="email" class="form-control"   placeholder="Email Address">
                              </div>
                              <div class="col-6">
                                <input name="dphone" type="number" class="form-control"  placeholder="Phone Number">
                              </div>
                            </div>
                            <div class="mb-3">
                              <label  class="form-label">Category</label>
                              <input name="dtbusiness" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                              <label  class="form-label">Name of The Place</label>
                              <input name="dplace" type="text" class="form-control">
                            </div>
                            <div class="form-text">By clicking below, I agree to the Terms of Use and that I have read the Privacy Statement.</div>
                            <div class="mb-3">
                                <button name="deal" type="submit" class="btn btn-outline-info fw-bold text-center mt-3">Submit</button>
                            </div>
                          </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="footer-section nav-bg mt-5">
        <div class="container  my-5">
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          
          >
    <!-- Grid container -->
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
/* For sell form */
if(isset($_POST['deal'])){

  $flname = $_POST['dflname'];
  $demail = $_POST['demail'];
  $dphone = $_POST['dphone'];
  $dtype = $_POST['dtbusiness'];
  $dplace = $_POST['dplace'];


  /* insert query */
  $insertquery =" insert into deal(flname,email,phone,category,nameofplace) values('$flname','$demail','$dphone','$dtype','$dplace')";


  $res = mysqli_query($con,$insertquery);

  if($res){
    ?>
    <script>
      alert("Form Data inserted Properly");
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