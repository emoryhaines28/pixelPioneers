<html>
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1">    
        <title>Contact Us</title>
        <link rel="stylesheet" href="mystyles.css">
        <style type="text/css">

        body {
            font-family: 'American Typewriter', serif;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 0; 
            padding: 0; 
            background-color: #F8F4E3;
        }

        .background-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('images/try.jpg');
            background-repeat: no-repeat; 
            background-size: cover; 
            background-position: center; 
            z-index: -1; 
        }

        .background-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 248, 220, 0.4); 
            z-index: -1; 
        }

        .contact-section {
            position: fixed;
            top: 90px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            margin-bottom: 10px;
            width: 80%; 
            max-width: 500px;
            z-index: 1;
            padding: 10px 20px;
            border-radius: 10px; 
            max-height: 70vh;
        }

        .contact-section h1 {
            margin-top: 5px;
            margin: 0;
            color: #F55D33;
            font-size: 40px;
            margin-bottom: 10px;
        }

        .contact-form {
            width: 80%;
            background-color: #F8F4E3; 
            margin: auto;
            max-width: 500px;
            padding: 20px;
            border-radius: 10px;
            border: 4px solid #F55D33;
            color: #F55D33; 
            border: 5px solid #F55D33;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-height: 70vh; 
            overflow-y: auto; 
        }

        .contact-form input[type="text"],
        .contact-form textarea {
            font-family: 'American Typewriter', serif;
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            max-width: 100%;
            border-radius: 5px;
            color: #F55D33;
        }

        .contact-form input[type="submit"] {
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
        }

        .contact-form input[type="submit"]:hover {
            background-color: #FF6347;
        }

        .rating {
            font-weight: bold;
            margin: 0 5px;
            font-size: 20px;
            color: #F55D33;
            margin-bottom: 10px;
            text-align: center;
            display: inline-flex;
            justify-content: center;
            align-items: left;
        }

        .rating label {
            margin: 0 5px;
            font-weight: lighter;
        }

        .rating input[type="radio"] {
            display: none;
        }

        .rating label:before {
            content: "\2605";
            display: inline-block;
            font-size: 25px;
            color: #F5BD33;
            cursor: pointer;
        }

        .rating input[type="radio"]:checked + label:before {
            color: #F55D33;
        }

        .question {
            margin: 0 5px;
            font-size: 20px;
            color: #F55D33;
            margin-right: 10px;
        }

        .question2 {
            margin: 0 5px;
            font-size: 15px;
            color: #F55D33;
            margin-right: 10px;
        }

        @media screen and (max-width: 600px) {
            .contact-section {
                margin-top: 10px;
            }
            .contact-form {
                max-height: 60vh; 
            }
        }

        @media screen and (max-width: 600px) {
            .select {
                width: 90%; 
                height: 90%;
            }

            .title h2 {
                font-size: 30px; 
            }

        }
     
        </style>
    </head>
    <body>
        <div class="background-image"></div>
        <div class="background-overlay"></div>
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
        <div class="contact-section">
            <div class="contact-form">
                <h1>Contact us</h1>
                <form method="get" action='#'>
                    <div class="question">Rate your quiz accuracy:</div>
                    <div class="rating">
                        <input type="radio" id="quizrating1" name="quizrating" value="1">
                        <label for="quizrating1">1</label>
                        <input type="radio" id="quizrating2" name="quizrating" value="2">
                        <label for="quizrating2">2</label>
                        <input type="radio" id="quizrating3" name="quizrating" value="3">
                        <label for="quizrating3">3</label>
                        <input type="radio" id="quizrating4" name="quizrating" value="4">
                        <label for="quizrating4">4</label>
                        <input type="radio" id="quizrating5" name="quizrating" value="5">
                        <label for="quizrating5">5</label>
                    </div>
                    <div class="question">Rate your selected products:</div>
                    <div class="rating">
                        <input type="radio" id="prodrating1" name="prodrating" value="1">
                        <label for="prodrating1">1</label>
                        <input type="radio" id="prodrating2" name="prodrating" value="2">
                        <label for="prodrating2">2</label>
                        <input type="radio" id="prodrating3" name="prodrating" value="3">
                        <label for="prodrating3">3</label>
                        <input type="radio" id="prodrating4" name="prodrating" value="4">
                        <label for="prodrating4">4</label>
                        <input type="radio" id="prodrating5" name="prodrating" value="5">
                        <label for="prodrating5">5</label>
                    </div>
                    <div class="question">How likely are you to purchase a recommended product?</div>
                    <div class="rating">
                        <input type="radio" id="purchase1" name="prodrating" value="1">
                        <label for="purchase1">1</label>
                        <input type="radio" id="purchase2" name="prodrating" value="2">
                        <label for="purchase2">2</label>
                        <input type="radio" id="purchase3" name="prodrating" value="3">
                        <label for="purchase3">3</label>
                        <input type="radio" id="purchase4" name="prodrating" value="4">
                        <label for="purchase4">4</label>
                        <input type="radio" id="purchase5" name="prodrating" value="5">
                        <label for="purchase5">5</label>
                    </div>
                    <div class="question">Rate your peau experience:</div>
                    <div class="rating">
                        <input type="radio" id="exprating1" name="exprating" value="1">
                        <label for="exprating1">1</label>
                        <input type="radio" id="exprating2" name="exprating" value="2">
                        <label for="exprating2">2</label>
                        <input type="radio" id="exprating3" name="exprating" value="3">
                        <label for="exprating3">3</label>
                        <input type="radio" id="exprating4" name="exprating" value="4">
                        <label for="exprating4">4</label>
                        <input type="radio" id="exprating5" name="exprating" value="5">
                        <label for="exprating5">5</label>
                    </div>
                    <div class="question">Leave us a note: </div> </br>
                    <textarea name="message" placeholder="Message" rows="5" required></textarea><br>
                    <div class="question">Let's chat! Email us at contactpeau@peau.com</div> </br>
                    <input type="submit" value="submit">
                </form>
            </div>
        </div>
        <footer>
            <div class="footercontent" >
                <a href="home.php">
                  <img src="images/logo.png" alt="Logo" class="logofoot"> 
                </a>
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