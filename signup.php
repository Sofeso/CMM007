<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="./css/style.css"/>
</head>
<body>
    <!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>BR</b> Architects</a>
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

           <!---Header Ends----->
    <main class="container-2">
        <section>
            <!-- Main Body Begins  -->
            
            <h2>Welcome</h2>
        </section>
           <!---Sign-Up form begins----> 
        <section class="form-wrapper-1">
         <div class="form-div-1">   
             <h3>New User? Sign Up Here</h3>
              <form action="homepage.php" method="POST" id="create-form"> 
                <input type="text" placeholder="Username" name="uname"><br><br>
                <input type="text" placeholder="Firstname" name="fname"><br><br>
                <input type="text" placeholder="Lastname" name="lname"><br><br>
                <input type="email" placeholder="Email" name="email"><br><br>
                <input type="password" placeholder="Password" name="password"><br><br>
                <input type="password" placeholder="Confirm Password" name="Confirm-password"><br><br>
                <input type="submit" class="button" value="Sign Up" name="signup-button"/>
                
                <a href="homepage.php" class="Signup"></a>
              </form>
          </div>
        </section>
         <!----Sign-Up form ends---->       
    </main>
         <!---Main Body Ends----->   
    
    
    
</body>
</html>

<?php

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
  //if something was posted
  $username = $_POST['username'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email ==$_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  if(!empty($username) && !empty($firstname) && !empty($lastname) && !empty($email) && !empty($password))

  {
   
     // save to database
     $query = "insert into user1 (username,firstname,lastname,email,password,confirm_password) 
     values ('$username','$firstname','$lastname','$email','$password','$confirm_password')";

     mysqli_query($con,$query);

     header("Location: login.php");
     die;

  } else {
        echo "information not valid";
  }
}




?>
