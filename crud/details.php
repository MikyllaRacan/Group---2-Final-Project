<?php
  include 'action.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="styles.css">

  <title>Details</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />

  <!----font----->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

</head>

<body>
<section class="home">
<div class="form_container">
            <i class="fa fa-close form_close"></i>

            <!-- Login Form -->
            <div class="form login_form">
            <form action="login.php" method="POST">
                    <h2>Login</h2>
                    <div class="input_box">
                        <input type="email" name="email" placeholder="Email" required>
                        <i class="fas fa-envelope email"></i>
                    </div>
                    <div class="input_box">
                        <input type="password" name="password" placeholder="Password" required>
                        <i class="fas fa-lock password"></i>
                    </div>
                    <div class="option_field">
                        <span class="checkbox">
                            <input type="checkbox" id="check">
                            <label for="check">Remember me</label>
                        </span>
                        <a href="#" class="forgot_pw">Forgot password?</a>
                    </div>
                    <button class="button">Login Now</button>
                    <div class="login_signup">
                        Don't have an account? <a href="#" class="signup_link">Signup</a>
                    </div>
                </form>
            </div>

            <!-- Signup Form -->
            <div class="form signup_form">
            <form action="signup.php" method="POST">
                    <h2>Signup</h2>
                    <div class="input_box">
                        <input type="username" name="username" placeholder="Username" required>
                        <i class="fas fa-user email"></i>
                    </div>
                    <div class="input_box">
                        <input type="email" name="email" placeholder="Email" required>
                        <i class="fas fa-envelope email"></i>
                    </div>
                    <div class="input_box">
                        <input type="password" name="password" placeholder="Password" required>
                        <i class="fas fa-lock password"></i>
                    </div>
                    <button class="button">Signup Now</button>
                    <div class="login_signup">
                        Already have an account? <a href="#" class="login_link">Login</a>
                    </div>
                </form>
            </div>
        </div>
  <nav class="navbar navbar-expand-md">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php">LOCALE LABEL</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <a class="nav-link active" href= "addrecord.php"><i class="fas fa-home"></i>&nbsp;Records</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#brands"><i class="fas fa-box"></i>&nbsp;Orders</a>
        </li>
      </ul>
    </div>
    <button class="button login_button" id="form-open">Login</button>


<!-- User Menu (hidden by default) -->
<div id="user-menu">
    <button id="user-dropdown">▼</button>
    <ul id="dropdown-menu">
        <!--<li><a href="#">Profile</a></li>-->
        <li><a href="#" id="logout-btn">Logout</a></li>
    </ul>
</div>
  </nav>

  <script src="script.js"></script>


  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 mt-3 bg-info p-4 rounded">
        <h2 class="bg-light p-2 rounded text-center text-dark">ID : <?= $vid; ?></h2>
        <div class="text-center">
          <img src="<?= $vproduct_image; ?>" width="300" class="img-thumbnail">
        </div>
        <h4 class="text-light">Name : <?= $vproduct_name; ?></h4>
        <h4 class="text-light">Price : <?= $vproduct_price; ?></h4>
        <h4 class="text-light">Code : <?= $vproduct_code; ?></h4>
      </div>
    </div>
  </div>
</body>

</html>