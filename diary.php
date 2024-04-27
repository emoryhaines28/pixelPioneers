<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width", initial-scale="1">
<title> Skin Diary </title>

<link rel="stylesheet" href="mystyles.css">
<!-- Internal Stylesheet -->
<style type="text/css">

  #form-container {
      margin: auto;
      margin-top: 100px;
      color: #F55D33; 
      background-color: #F8F4E3;
      padding: 20px;
      max-width: 575px; 
      width: 80%; 
      border-radius: 10px; 
      max-height: 70vh; 
      overflow-y: auto; 
      text-align: center;
  }

  #form-container h1 {
        text-align: center;
  }

  input[type="text"], select {
    border: 1px #FFF;
    border-radius: 5px;
  }

  h2 {
    color:#F55D33;
  }

  body {
    font-family: 'American Typewriter', serif;
    color: #333;
    background-color: #F8F4E3;
  }

  select {
    margin-top: 10px;
    color: #F55D33;
  }

  input[type="submit"] {
      background-color: #F55D33; 
      color: #F8F4E3;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border-radius: 7px;
      font-family: 'American Typewriter', serif;
      display: block;
      margin: 20px auto;
  }

  input[type="submit"]:hover {
            background-color: #FF6347;
  }

  @media only screen and (max-width: 768px) {
    #form-container {
      margin-bottom: 40px; 
    }
 }



</style>

</head>

<body>
  <!-- navigation bar -->
  <nav>
    <div class="bar">
        <a href="home.php">
            <img src="images/logo.png" alt="Logo" class="logo"> 
        </a>
        <div class="navlinks">
            <a href="form.php" class="navlink">your skin type</a>
            <a href="skincolumns.php" class="navlink">skin types</a>
            <a href="about.php" class="navlink">about us</a>
            <a href="contact.php" class="navlink">contact us</a>
            <a href="diary.php" class="navlink">skin diary</a>
        </div>
        <a href="#" class="hamburger">&#9776;</a>      
    </div>
  </nav>

  <!-- footer -->
  <footer>
    <div class="footercontent" >
      <a href="home.php">
        <img src="images/logo.png" alt="Logo" class="logofoot"> 
      </a>
        <p>&copy;2024 peau.  All rights reserved.</p>
    </div>
  </footer>

  <!-- Skin Form -->
  <div id="form-container">
  <h1>Enter your name and email to access your skin diary:</h1>
	<form id="my_form" action="diary_info.php" method="post">
    <label>Name:</label> <input type="text" name='name' id='the_name'><br><br>
    <label>Email:</label> <input type="text" name='email' id='the_email'><br>
    
    <input type = "submit" value = "go!">
	</form>
  </div>

  <script>
  // navigation link hamburger
  document.addEventListener('DOMContentLoaded', function () {
            const hamburger = document.querySelector('.hamburger');
            const navLinks = document.querySelector('.navlinks');

            hamburger.addEventListener('click', function () {
                navLinks.classList.toggle('show');
            });
            })
        
  </script>

</body>

</html>