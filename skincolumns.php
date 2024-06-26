<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skin Columns Page</title>
  <!-- link to external stylesheet -->
  <link rel="stylesheet" href="mystyles.css">
  <!-- internal stylesheet -->
  <!-- This page fulfills the column requirement -->
  <style type="text/css">
    body {
      color: #333;
      margin: 0;
      padding: 0;
      display: flex;
      min-height: 100vh; 
    }

    h3 {
      font-family: 'American Typewriter', serif;
      font-weight: normal;
      font-size: 20px;
    }
    .column {
      flex: 1; 
      padding: 20px;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .column button {
      font-family: 'American Typewriter', serif;
      background-color: #F55D33; 
      color: #F5CC97; 
      border: none; 
      cursor: pointer; 
      border-radius: 10px;
    }

    .column button:hover {
      color: #F5BD33; 
    }

    .hidden {
      display: none;
    }

   
    /* Change directions of columns when on phone or smaller screen */
    @media (max-width: 720px) {
    body {
      flex-direction: column; 
    }

    .column:first-of-type {
    margin-top: 50px; 
  }
  }
  </style>
</head>
<body>

  <h1 class="hidden"> Skin Types</h1>
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

  <!-- Send to different skin pages based on the button clicked -->
  <div class="column" style=" background-color: #E8E2C5;">
    <button onclick="window.location.href='dry.php?skintype=dry'"> <h3>Dry Skin</h3></button>
  </div>

  <div class="column" style=" background-color: #F5CC97;">
    <button onclick="window.location.href='combination.php?skintype=combination'"><h3> Combination Skin </h3></button>
  </div>

  <div class="column" style=" background-color: #fab875;">
    <button onclick="window.location.href='oily.php?skintype=oily'"><h3> Oily Skin </h3></button>
  </div>

  <script>
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
