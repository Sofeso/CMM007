<?php

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{

  $username = $_POST['username'];
  $password = $_POST['password'];

  if(!empty($username)&& !empty($password))
  {
    //read from the database
    $query = "select * from user1 where username = '$username'";
    $result = mysqli_query($con,$quert);

    if($result)
    {
      if($result && mysqli_num_rows($result) > 0)
      {
        $user_data = mysqli_fetch_assoc($result);
        if($user_data['password']===$password)
        {
          $_SESSION['username'] = $user_data['username'];
          header("Location:homepage.php");
          die;    
        }
      }
    }
    
    
  } else {
      echo "Enter valid information";
  }
}

?>





<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="./css/style.css"/>
</head>
<body>
    <!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>FC</b> Madrid</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#home" class="w3-bar-item w3-button">Home</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
      <a href="#login" class="w3-bar-item w3-button">Login</a>
      <a href="#signup" class="w3-bar-item w3-button">Signup</a>
    </div>
  </div>
</div>

    <main class="container">

            <!-- Main body begins here-->
            <section class="form-wrapper-2">
                <h2 class="form-info"> Please Login here</h2>
               <div class="form-div">
                    <form action="homepage.php" method="POST" id="create-form">
                        <input type="email" placeholder="Email" name="email">
                        <input type="password" placeholder="Password"  name="password">
                        <div class="login">
                        <input type="submit" value="Login">
                        </div>
                        <a href="signup.php" class="ca">Create an Account</a>
                    </form>

                </div>

            </section>
             
    </main>
           <!---Main Body Ends----->
    

    
     
     </body>
     
     </html>
    
