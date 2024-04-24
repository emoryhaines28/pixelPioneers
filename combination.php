<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>combination skin</title>
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
        <h1>Combination Skin</h1>
        <div class="small">
          Discover a curated selection of skincare essentials specially formulated for 
          combination skin. Whether you're dealing with an oily T-zone or dry patches, 
          we've sifted through the clutter to bring you a range of products designed
          to address the unique needs of your skin type. From gentle cleansers to
          lightweight moisturizers and targeted treatments, our recommendations are 
          here to help you achieve balance and harmony in your skincare routine. 
          Say hello to a complexion that feels nourished, hydrated, and perfectly in sync.

          </br></br>These are our favorite products for combination skin and we hope you love them too!
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
