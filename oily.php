<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Oily skin</title>
    <link rel="stylesheet" href="mystyles.css">
    <style type="text/css">
        body {
            background-color: #F5CC97; 
        }
        .info {
            margin-top: 80px; 
            margin-bottom: 80px; 
            padding: 20px;
            color: #F55D33; 
        }
        .small {
            color: #c83f19;
        }

        .container {
            overflow-x: auto;
            white-space: nowrap;
            padding-bottom: 10px; 
        }

        .box {
            float: left;
            margin-right: 20px;
            max-width: 200px; 
            width: auto;
            text-align: center;
            width: 100%; /* Adjusted width to prevent overlapping */
            text-align: center;
            margin-bottom: 20px;
        }

        .box-content {
            width: 100%;
            height: 200px;
            border: 2px solid #F55D33;
            background-color: antiquewhite;
            overflow: hidden;
        }

        .box-content img {
            width: 100%; 
            height: 100%; 
            object-fit: cover;
        }
    
        .text {
            margin-top: 10px;
            max-width: 180px; /* Adjusted width to prevent overlapping */
            text-align: center;
            color: #F55D33;
            word-wrap: break-word;
            white-space: normal; /* Allow text to wrap */
        }
        h2 {
            clear: both;
        }
    </style>
</head>
<body>
    <nav>
        <div class="bar">
            <a href="home.html">
                <img src="images/logo.png" alt="Logo" class="logo"> 
            </a>
            <div class="navlinks">
                <a href="form.html" class="navlink">your skin type</a>
                <a href="skincolumns.html" class="navlink">skin types</a>
                <a href="about.html" class="navlink">about us</a>
                <a href="contact.html" class="navlink">contact us</a>
            </div>
            <a href="#" class="hamburger">&#9776;</a>      
        </div>
    </nav>

    <div class="info">
        <h1>Oily Skin</h1>
        <div class="small">
          Combat oily skin with a balanced approach. Choose lightweight, oil-free products to 
          control shine and avoid pore blockage. Use gentle cleansers with salicylic acid or 
          benzoyl peroxide to manage excess oil and breakouts. Opt for non-comedogenic moisturizers
          to hydrate without adding grease. Prioritize oil-free, broad-spectrum sunscreens to protect
          from UV damage without causing breakouts. Tailor your skincare routine for a radiant,
          blemish-free complexion.

            </br></br>These are our favorite products for oily skin and we hope you love them too!
        </div>

        <div class="container">
        <?php
            include 'popproducts.php';
        ?>
           
        </div>
    
    <footer>
        <div class="footercontent" >
            <img src="images/logo.png" alt="Logo" class="logofoot"> 
            <p>&copy;2024 peau.  All rights reserved.</p>
        </div>
    </footer>
    
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
