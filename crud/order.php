<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="styles.css">

  <title>Order List</title>
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
<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cart_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}


// Functions to manage orders

// Function to display all orders
function displayOrders($conn) {
    $sql = "SELECT * FROM orders";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Address</th><th>Payment Mode</th><th>Products</th><th>Amount Paid</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["address"]."</td><td>".$row["pmode"]."</td><td>".$row["products"]."</td><td>".$row["amount_paid"]."</td></tr>"; }
        }
        echo "</table>";
    } 

// Function to add a new order
function addOrder($conn, $name, $email, $phone, $address, $pmode, $products, $amount_paid) {
    $sql = "INSERT INTO orders (name, email, phone, address, pmode, products, amount_paid) VALUES ('$name', '$email', '$phone', '$address', '$pmode', '$products',   
 '$amount_paid')";

    if ($conn->query($sql) === TRUE) {
        echo "New order created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Function to update an order
function updateOrder($conn, $id, $name, $email, $phone, $address, $pmode, $products, $amount_paid) {
    $sql = "UPDATE orders SET name='$name', email='$email', phone='$phone', address='$address', pmode='$pmode', products='$products', amount_paid='$amount_paid'   
 WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Order updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Function to delete an order
function deleteOrder($conn, $id) {
    $sql = "DELETE FROM orders WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Order deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Example usage:
displayOrders($conn);

// Add a new order
// addOrder($conn, "John Doe", "johndoe@example.com", "123-456-7890", "123 Main St", "COD", "Product A, Product B", 100);

// Update an order
// updateOrder($conn, 1, "Jane Smith", "janesmith@example.com", "987-654-3210", "456 Elm St", "Card", "Product C", 200);

// Delete an order
// deleteOrder($conn, 2);

$conn->close();

?>