<!DOCTYPE html>
<html>
<head>
<title>Home</title>
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
      <a href="homepage.php" class="w3-bar-item w3-button">Home</a>
      <a href="about.php" class="w3-bar-item w3-button">About</a>
      <a href="history.php" class="w3-bar-item w3-button">History</a>
      <a href="contact.php" class="w3-bar-item w3-button">Contact</a>
      <a href="login.php" class="w3-bar-item w3-button">Login</a>
      <a href="signup.php" class="w3-bar-item w3-button">Signup</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="/w3images/architect.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>FC</b></span> <span class="w3-hide-small w3-text-light-grey">Architects</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16">Real Madrid FC Museum</h1>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Teams</div>
        <img src="images/image1.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Jerseys</div>
        <img src="images/image2.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Trophy Cabinet</div>
        <img src="images/image3.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Trophy Cabinet</div>
        <img src="images/image4.jpg" alt="House" style="width:100%">
      </div>
    </div>
  </div>

  
  

  

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="images/BECKHAM.jpg" alt="John" style="width:100%">
      <h2>Beckham</h2>
      
      
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="images/CASSILLAS.jpg" alt="Jane" style="width:100%">
      <h2>Cassillas</h2>
      
      
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="images/DI STEFANO.jpg" alt="Mike" style="width:100%">
      <h2>Di Stefano</h2>
      
      
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="images/CANNAVARO.jpg" alt="Dan" style="width:100%">
      <h2>Cannavaro</h2>
      
      
    </div>
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16">Feedback</h1>
    <p>Lets hear from you.</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
  
<!-- Image of location/map -->
<div class="w3-container">
  <img src="/w3images/map.jpg" class="w3-image" style="width:100%">
</div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Copyright 2022 <a href="Copyright 2022. Robert Gordon University SoC IT CMM 007 Coursework" title="W3.CSS" target="_blank" class="w3-hover-text-green">RGU School of Computing</a></p>
</footer>

</body>
</html>
