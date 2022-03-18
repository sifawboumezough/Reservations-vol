<?php
    if(isset($_POST['submit'])) {
        $loginUser = new UsersController();
        $loginUser->log();
    }
 ?>



<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <!-- <link rel="stylesheet"  href="register.css"> -->
  <link rel="stylesheet" href="views/css/register.css">
   <link rel = "stylesheet" href="./includes/Footer.php">
</head>
<body>
  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            User Login
          </h4>
          <form method ="post" class="form-box px-3">
          <div class="form-input">
              <span><i class="fa fa-user-o"></i></span>
              <input type="text" name="fullname" placeholder="Full Name" tabindex="10" required>
            </div>
            <!-- <div class="form-input">
              <span><i class="fa fa-user-o"></i></span>
              <input type="text" name="username" placeholder="username" tabindex="10" required>
            </div> -->
            <div class="form-input">
              <span><i class="fa fa-key"></i></span>
              <input type="password" name="password" placeholder="Password" required>
            </div>

            <!-- <div class="mb-3">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="cb1" name="">
                <label class="custom-control-label" for="cb1">Remember me</label>
              </div>
            </div> -->

            <div class="mb-3">
              <button type="submit" name ="submit" class="btn btn-block text-uppercase">
                Login
              </button>
            </div>
            <div class="text-center mb-2">
              Don't have an account?
              <a href="<?php echo BASE_URL; ?>register" class="register-link">
                Register here
              </a>
            </div>

            <hr class="my-4">
            
            <div class="text-center mb-3">
            <div class="mb-3">
           
              <a href="<?php echo BASE_URL;?>loginadmin" class="register-link">
                Log in as an admin
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html> 