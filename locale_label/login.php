<?php

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = '$email' and password='$password'");
       // $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            // Verify password
            if (password_verify($password, $user['password'])) {
                //echo 'ind.php';//"Login successful!";
                header("location: ind.php");
            } else {
                echo "Invalid password!";
            }
        } else {
            header("location: ind.php");

            //echo "No account found with that email!";
        }

        $stmt->close();
    } else {
        echo "Please provide both email and password.";
    }
}

$conn->close();



/*if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password) ;
    
    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
     session_start();
     $row=$result->fetch_assoc();
     $_SESSION['email']=$row['email'];
     header("Location: homepage.php");
     exit();
    }
    else{
     echo "Not Found, Incorrect Email or Password";
    }
}*/




/*if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password) ;
    
    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
     session_start();
     $row=$result->fetch_assoc();
     $_SESSION['email']=$row['email'];
     header("Location: homepage.php");
     exit();
    }
    else{
     echo "Not Found, Incorrect Email or Password";
    }
}*/

?>