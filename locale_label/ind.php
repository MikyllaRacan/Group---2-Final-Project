<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Locale Label</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel='stylesheet' href='locale-styles.css' />
</head>


<body id = "home">
 <!-----login------->
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

  <!-- Navbar start -->
  <nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="ind.php">&nbsp;&nbsp;LOCALE LABEL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <a class="nav-link active" href= #home><i class="fas fa-home"></i>&nbsp;Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href=#charlotte><i class="fas fa-tshirt"></i>&nbsp;Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#brands"><i class="fas fa-th-list mr-2"></i>Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
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
  <!-- Navbar end -->

    <!-- HOMEPAGE TAG -->
    <section class="homepage">
        <div class="homepage_content">
            <h1>LABELED LOCALLY, WORN GLOBALLY</h1>
            <p>At LOCALE LABEL, we're passionate about providing high-quality fashion that stands the test of time. Our collection is thoughtfully selected to offer a variety of styles and trends, all crafted with the finest materials and impeccable workmanship. Experience the difference of locally made fashion at LOCALE LABEL.</p>
            <button class="button homepage_button"><a href = "#charlotte" class = "shopnow">Shop Now</a></button>
        </div>
        <!--<div class="homepage_image">
            <img src="https://via.placeholder.com/300" alt="Fashion model">
        </div>-->
    </section>
        <!-- HOMEPAGE TAG -->


        <!--------brands------>
    <section class="brands" id="brands">
        <div class="center-text">
            <h2>OUR BRANDS</h2>
        </div>

        <div class="brands-container">
            <div class="brand">
                <a href = "#charlotte">
                    <img src="locale_label_img/charlottefolk_logo.png" alt="Charlotte Folk">
                </a>
            </div>

            <div class="brand">
                <a href="#mnla">
                    <img src="locale_label_img/mn+la_logo.webp" alt="MN+LA">
                </a>
            </div>

            <div class="brand">
                <a href="#richboyz">
                    <img src="locale_label_img/richboyz_logo.png" alt="Richboyz">
                </a>
            </div>

            <div class="brand">
                <a href="#offhigh">
                    <img src="locale_label_img/offhigh_logo.avif" alt="Offhigh">
                </a>
            </div>

            <div class="brand">
                <a href="#toughwave">
                    <img src="locale_label_img/toughwave_logo.png" alt="Tough Wave">
                </a>
            </div>
        </div>
    </section>

       <!-----------end brands--------->


  <!-- Displaying Products Start -->
   

        <!--------PRODUCTS------->
       <!-- CHARLOTTE FOLK Products -->
       <div class="brand-section" id = "charlotte">
    <h2 class = "charlotte">CHARLOTTE FOLK</h2>
    </div>
  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM charlottefolk_product');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>

      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
            <div class="card-body p-1">
            <h4 class="card-title text-center text-black"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger">₱&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?></h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btns btn-infos btn-blocks addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <!--end of CHARLOTTE FOLK Products -->

  <!-- MN+LA Products -->
  <div class="brand-section" id = "mnla">
    <h2 class = "mnla">MN+LA</h2>
    </div>
  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM mnla_product');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>

      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
            <div class="card-body p-1">
              <h4 class="card-title text-center text-black"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger">₱&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?></h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btns btn-infos btn-blocks addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>


    <!-- RICHBOYZ Products-->
    <div class="brand-section" id = "richboyz">
        <h2 class = "richboyz">RICHBOYZ</h2>
    </div>
  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM richboyz_product');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>

      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
            <div class="card-body p-1">
            <h4 class="card-title text-center text-black"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger">₱&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?></h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btns btn-infos btn-blocks addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <!-- end of richboyz products -->

<!-- OFFHIGH Products-->
<div class="brand-section" id = "offhigh">
        <h2 class = "offhigh">OFFHIGH</h2>
    </div>
  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM offhigh_product');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>

      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
            <div class="card-body p-1">
            <h4 class="card-title text-center text-black"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger">₱&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?></h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btns btn-infos btn-blocks addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <!-- end of OFFHIGH products -->


  <!-- TOUGHWAVE Products-->
<div class="brand-section" id = "toughwave">
        <h2 class = "toughwave">TOUGHWAVE</h2>
    </div>
  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM toughwave_product');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>

      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
            <div class="card-body p-1">
            <h4 class="card-title text-center text-black"><?= $row['product_name'] ?></h4>
              <h5 class="card-text text-center text-danger">₱&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?></h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['toughwave_id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btns btn-infos btn-blocks addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <!-- end of TOUGHWAVE products -->

        <!-------CUSTOMER SERVICE--------->
<section class="services" id="services">
        <h2>SERVICES</h2>
        <div class="icon-container">
            <div class="icons">
                <img src="img/car-regular-60.png" alt="">
                <div class="info">
                    <h3>Cash on Delivery</h3>
                    <span>Free Shipping</span>
                </div>
            </div>  

            <div class="icons">
                <img src="img/credit-card-regular-60.png" alt="">
                <div class="info">
                    <h3>Secured Payment</h3>
                    <span>Protected by Paypal</span>
                </div>
            </div>  

            <div class="icons">
                <img src="img/gift-regular-60.png" alt="">
                <div class="info">
                    <h3>Offer and Gifts</h3>
                    <span>On All Orders</span>
                </div>
            </div>  

            <div class="icons">
                <img src="img/money-withdraw-regular-60.png" alt="">
                <div class="info">
                    <h3>10 days return</h3>
                    <span>Moneyback Guarantee</span>
                </div>
            </div>  

        </div>           
    </section>


<!-------CUSTOMER SERVICE--------->

<!-------CONTACT US SERVICE--------->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div id="contact">
        <h2 id="section">CONTACT US</h2>
        <div id="contact_row">
            <div class="contact_col">
                <div>
                    <p>
                        <img src="locale_label_img\email.png" class = "con-icons"></img>
                        <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">locale_label@gmail.com</a>
                    </p>

                    <p>
                        <img src="locale_label_img\phone-call.png" class = "con-icons">  847-0285</img>
                    </p>

                    <p> 
                        <img src="locale_label_img\location.png" class = "con-icons">   Muntinlupa City</img>
                    </p>

                        <br>
                        <h3>Follow Us</h3>
                        <p id="social">
                            <a href="https://www.facebook.com/jeannalei.reyes"><img src = "locale_label_img\facebook.png" class = "con-social"></img></a>
                            <a href="https://instagram.com/jeannarys_"><img src = "locale_label_img\instagram.png" class = "con-social"></img></a>
                            <a href="https://twitter.com/jeannarys_"><img src = "locale_label_img\tiktok.png" class = "con-social"></img></a>
                        </p>
                </div>
            </div>
            <div class="contact_col">
                <form method="POST">
                    <h2>Get in touch</h2>
                    <input type="text" value = "Name">
                    <input type="text" value = "Email">
                    <textarea name="message" placeholder="Type Message"></textarea>
                    <button class="send">Send a message</button>
                </form>
            </div>
       
        
        </div>
    </div>
<!-------CONTACT US SERVICE--------->

<!------------About Us start--------------->
<div class="about" id="about">
            <h2 class="heading">ABOUT US</h2>
                    <div class="ABOUT US">
                        <p>
                            <br>At LOCALE LABEL, our journey began with a simple yet powerful idea: to celebrate local craftsmanship while offering fashion that resonates globally. What started as a passion project in a small design studio has grown into a thriving brand that values quality, sustainability, and individuality.<br>
                            <br>Our mission is to bridge the gap between local artisans and the global fashion scene, empowering communities through fair practices while delivering timeless and versatile pieces to our customers. We believe that fashion should tell a story—one of authenticity, care, and creativity.<br>
                            <br>Our vision is to redefine how people connect with OURS clothing. By championing locally inspired designs made with the finest materials, we aim to inspire confidence, self-expression, and a deeper appreciation for thoughtful craftsmanship. At LOCALE LABEL, we’re not just creating fashion; we’re building a movement that values style with substance. Join us on this journey and wear the change you wish to see.<br>
                        </p>

                    </div>
        </div>
        <!--------------About Us end-------------->


  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
  <script src="script.js"></script>
</body>

</html>