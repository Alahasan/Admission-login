<?php include "config.php"?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SSC_Admission | home</title>
    <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/style.css">
</head>
<body>
  <?php
  if (isset($_POST['loginbtn'])) {
    $semail = $_POST['semail'];
    $spass = $_POST['spass'];
    $tanvir="SELECT * FROM $TBL_STUD WHERE stud_email ='$semail' AND stud_password = '$spass'";
    $result = $conn->query($tanvir);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
     $msg = "Login Successfull";
     $_SESSION['login_status'] = true; 
        $_SESSION['stud_name'] = $row['stud_name'];
        $_SESSION['ID'] = $row['ID'];

        header( "refresh:1;url=main.php" );
  }
} else {
  $err = "Unknown Email & Password";
}
}
  ?>





  <!-- <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand font-weight-bold" href="index.php"> 
        Home
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="main.php">Profile</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->


  <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
         SSC Registrasion 2022 <br><br>
        <div class="hdd"><a href="register.php" class="abtn">Apply now...</a></div>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form method="POST">
              
              <!-- Email input -->
              <h1>Login for Details</h1>
              <div class="form-outline mb-4">
                <input type="email"name="semail" id="form3Example3" class="form-control" />
                <label class="form-label" for="form3Example3">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" name="spass" id="form3Example4" class="form-control" />
                <label class="form-label" for="form3Example4">Password</label>
              </div>

            
              <!-- Submit button -->
              <input type="submit" type="submit" name="loginbtn" class="btn btn-primary btn-block mb-4" value="Login">
              
              <?php 
                      if (isset($err)) {
                        echo '
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  '.$err.'
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                      }

                      if (isset($msg)) {
                        echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                  '.$msg.'
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                      }
                     ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->










    <script type="text/javascript" src="Assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="Assets/main.js"></script>
</body>
</html>