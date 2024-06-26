<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1">    
        <title> homepage </title>
        <link rel="stylesheet" href="mystyles.css">
        <style type="text/css">
            body {
                background-image: url(); 
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;  
                min-height: 100vh;
               
            }

            .spacer1 {
                height: 200px;
                background-color: #F5CC97 ;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 0 20px; 
                box-sizing: border-box; 
                margin-top: 70px;
                color: #F55D33;
                font-size: 40px;
                
            }

            .spacer1 h1 {
                color: #F55D33;
                font-size: 43px;
                margin-right: 20px;
                font-weight: normal;
            }

            .text {
                color: #F55D33;
                font-size: 20px;
                max-width: 800px;
                opacity: 0;
                margin: 0 auto;
                transition: opacity 1s ease-in-out;
                line-height: 1.6;
                font-weight: bold;
            }

            .fade{
                color: #F55D33;
                font-size: 40px;
                opacity: 0;
                transition: opacity 1s ease-in-out;
            }
            .section1 {
                height: 500px;
                background-image: url('images/background5.jpg'); 
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;  
                text-align: center;
            }
            .spacer2 {
                height: 200px;
                background-color: #F5CC97;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .section2 {
                height: 500px;
                background-image: url('images/background.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;  
                text-align: center;
            }

            .quote-section {
                background-color: #F5CC97; /* Light orange background */
                padding: 20px;
                margin-top: 0;
                text-align: center;
                margin-bottom: 0px;
                
            }

            .quote-display p {
                color: #F55D33; /* Black text color */
                font-size: 24px; /* Keeping the font size consistent */
                font-weight: bold;
                font-family: 'American Typewriter', serif;
                margin-top: 20px;
                margin-left: 40px; 
                margin-right: 40px;
            }

            #quoteAuthor {
                margin-top: 20px;
                font-style: italic;
            }


            .reviewsection {
                background-color: #F5CC97;
                padding: 50px;
                margin-bottom: 20px;
                margin-top: 0px;
                text-align: center;
                
            }

            .reviews-container {
                display: flex;
                justify-content: center;
                gap: 20px;
            }

            .fake-review {
                flex: 0 0 30%;
                background-color: #F55D33;
                color: #F5CC97;
                border-radius: 10px;
                margin: 20px;
                padding: 20px;
                font-size: 18px;
                box-sizing: border-box;
                text-align: center;
            }

            .review {
                background-color: #F55D33;
                color: #F5CC97;
                font-size: 30px;
                border-radius: 10px;
                padding: 10px 20px;
                opacity: 0;
                transition: opacity 1s ease-in-out;
            }   

            @media (max-width: 830px) {
                .reviews-container {
                    flex-direction: column;
                    align-items: center;
                    gap: 0px;
                }

                .spacer1 p {
                    display: none;
                }

                .fake-review {
                    flex: 0 0 70%;
                    margin-top: 20px; 
                    padding: 10px;
                }

                .review {
                    padding: 5px 5px;
                }
                .text {
                    font-size: 18px;
                    margin: 10px;
                    font-weight: normal;
                    line-height: normal;
                }
            }

            @media (max-width: 499px) {
                .fade {
                    font-size:30px;
                }
            }

            @media screen and (min-width: 900px) {
                .spacer1 h1 {
                display: block;
                }
            }

            @media screen and (max-width: 899px) {
                .spacer1 h1 {
                    display: none;
                }
            }
</style>  
    </head>
    <body>
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

        <div class="spacer1">
            <h1> peau is... </h1> 
            <div class="fade">
                skincare that's personal
            </div>      
        </div>

        <section class="section1"> </section>
        
        <div class="spacer2">
            <div class="text" >
                At Peau, we understand that everyone's skin is unique, and finding the right skincare routine can be challenging. That's why we've made it our mission to simplify the process for you. Our innovative platform asks the right questions to analyze your skin type accurately.
            </div>
        </div>

        <section class="section2"> </section>

        
        <section class="quote-section">
            <div class="quote-display">
                <p id="quoteText">Loading quote...</p>
                <p id="quoteAuthor"></p>
            </div>
        </section>
    
        <section class="reviewsection">
            <div class="review">Reviews</div>
            <div class="reviews-container">
                <div class="fake-review">
                   <p>"Peau simplified my skincare routine. Their recommendations worked wonders for my skin, and their customer service was exceptional!"</p>
                    -Nicki M.
                </div>
                <div class="fake-review">
                    <p>"Thanks to Peau, my skin has never looked better. Their platform made finding the right products effortless, and their support team was fantastic!"</p>
                    -Justin B.
                </div>
                <div class="fake-review">
                    <p>"Peau's personalized recommendations transformed my skincare routine. Effective products, excellent service - highly recommend!"</p> 
                  -Kim K.
                </div>
            </div>
        </section>


            

        <footer>
            <div class="footercontent" >
                <a href="home.php">
                  <img src="images/logo.png" alt="Logo" class="logofoot"> 
                </a>
                  <p>&copy;2024 peau.  All rights reserved.</p>
              </div>
        </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('.fade').fadeTo(400, 1);
                $('.text').fadeTo(300, 1);
                $('.review').fadeTo(300, 1);
            }, 300);
         
        });
    </script>
        <script>
           document.addEventListener('DOMContentLoaded', function () {
            const hamburger = document.querySelector('.hamburger');
            const navLinks = document.querySelector('.navlinks');

            hamburger.addEventListener('click', function () {
                navLinks.classList.toggle('show');
            });
            })

            fetch("https://quote-garden.onrender.com/api/v3/quotes?genre=beauty")
            .then(response => response.json())
            .then(data => {
                const quoteText = document.getElementById('quoteText');
                const quoteAuthor = document.getElementById('quoteAuthor');
                let index = 0;

                function updateQuote() {
                    quoteText.textContent = '"' + data.data[index].quoteText + '"';
                    quoteAuthor.textContent = '- ' + data.data[index].quoteAuthor;
                    index = (index + 1) % data.data.length;
                }

                updateQuote(); // Initial display
                setInterval(updateQuote, 10000); // Update quote every 5 seconds
            });
         </script>

    </body>
</html>