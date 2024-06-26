<html>
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1">    
        <title>About Us!</title>
        <link rel="stylesheet" href="mystyles.css">
        <style type="text/css">

        body {
            background-color: #F8F4E3; 
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .styled-box {
            text-shadow: #F55D33;
            text-align: center;
            margin-left: 30px;
            margin-right: 30px;
            padding: 10px;
            height: auto;
            align-self: center;
            margin-top: 50px;
            background-color: #F5CC97;
            border: 2px solid #F55D33;
            border-radius: 10px;
            background-color: rgba(248, 244, 227, 0.85); 
        }

        .styled-box2 {
            text-shadow: #F55D33;
            color: #F8F4E3;
            font-size: 40px;
            text-align: center;
            margin-left: 30px;
            margin-right: 30px;
            padding: 10px;
            height: auto;
            align-self: center;
            align-content: center;
            margin-top: 50px !important;
            background-color: #F55D33;
            border: 2px solid #F8F4E3;
            border-radius: 10px;
            max-width: max-content;
            align-self: center !important; 
            width: fit-content; 
            margin: 0 auto; 
        }

        .about-section {
            background-color: #F5CC97;;
            background-size: cover;
            background-position: center;
            padding: 40px;
            margin-top: 65px;
            border: 4px solid #F55D33;
        }

        @media screen and (max-width: 600px) {
            .team-section {
                padding: 0;
                text-align: center;
                flex-direction: column;
                align-items: center; 
            }
            .team-member {
                max-width: 200px; 
            } 

            .team-member img {
                width: 100%;
                max-width: 200px; 
                max-height: 200px;
                border-radius: 50%;
                margin: 0 auto;
            }
        }

        .about-section p {
            font-size: 24px;
            color: #F55D33;
            z-index: 1; 
            position: relative; 
        }

        .team-section {
            margin-top: 40px;
            margin-top: 40px;
            display: flex;
            flex-wrap: wrap; 
            justify-content: space-between; 
        }

        .team-member {
            text-align: center;
            margin-bottom: 20px; 
            width: calc(90% - 10px);
            max-width: calc(50% - 40px);
            margin-left: 20px; 
            margin-right: 20px;
            margin-bottom: 40px;
        }

        .team-member img {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            border: 6px solid #F55D33;
            margin: auto;
            display: flex;
            justify-content: center;
        }

        .team-member h3 {
            margin-top: 20px;
            color: #F55D33;
            font-size: 24px;
        }

        .team-member p b {
            margin-top: 30px;
            color: #F55D33;
            font-size: 24px;
        }

        .team-member p {
            color: #F55D33;
            margin-top: 1px !important;
        }

        .team-start h2 {
            color: #F55D33;
            text-align: center;
            font-size: 40px;
            margin-left: 40px;
            margin-top: 40px;
        }

        .values-section ul li {
            margin-bottom: 10px; 
        }

        .values-section {
            background-image: url('images/val2.jpg');
            background-size: cover;
            background-position: center;
            padding: 40px;
            margin-top: 20px;
            margin-bottom: 45px;
            border: 4px solid #F55D33;
        }

        .values-section .styled-box {
            text-shadow: #F55D33;
            color: #F8F4E3 !important;
            font-size: 18px;
            text-align: center;
            margin: 0 auto; 
            background-color: rgba(248, 244, 227, 0.85); 
            border: 2px solid #F55D33;
            border-radius: 10px;
            padding: 5px;
            max-width: 90%; 
        }

        .values-section p {
            margin-top: 10px;
            font-size: 18px;
            color: #F55D33;
            z-index: 1; 
            position: relative; 
        }

        .about-section h1 {
            color:#F55D33!important; 
            font-size: 40px; 
            margin-bottom: 20px;
            margin-top: 5px;
            text-align: center;
        }

        .values-list {
            list-style: none;
            padding: 0;
        }

        .values-list li {
            font-size: 18px;
            color: #F55D33;
            position: relative;
        }

        .values-list li:before {
            content: "\2022";
            color: #F55D33; 
        }

        .values-section h2 {
            color: #F55D33 !important; 
            font-size: 40px; 
            margin-bottom: 20px;
            margin-top: 0px;
            text-align: center;
        }

        .styled-box p {
            font-size: 18px;
            color: #F55D33;
            margin: 0;
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
        <div class="container">
            <section class="about-section">
                <h1 class=>About Us</h1>
                <p class="styled-box">Welcome to peau, your destination for all things radiant, personal, and beautiful. peau was founded to address an 
                    unmet need in the skincare industry: Products recommended for <em>your</em> skin!</br>
                    <b>At peau, skincare is personal!</b></p>
                </p>
            </section>
            <section class="team-start">
                <h2>Meet Our Team</h2>
            </section>
            <section class="team-section">
                <div class="team-member">
                    <img src="images/emorypic.jpg" id="TeamMember 1">
                </br> </br>
                    <p><b>Emory Haines</b></p>
                    <p>Co-Founder and Chief of Branding</p>
                </div>
                <div class="team-member">
                    <img src="images/emilia3.jpg" id="TeamMember 2">
                </br> </br>
                    <p><b>Emilia Nathan</b></p>
                    <p>Co-Founder and Chief of Data</p>
                </div>
                <div class="team-member">
                    <img src="images/maddy3.jpg" id="TeamMember 3">
                </br> </br>
                    <p><b>Maddy Dumont</b></p>
                    <p>Co-Founder and Chief Skincare Expert</p>
                </div>
                <div class="team-member">
                    <img src="images/isabelle2.jpg" id="TeamMember 3">
                </br> </br>
                    <p><b>Isabelle Bain</b></p>
                    <p>Co-Founder and Chief of Design</p>
                </div>
            </section>
        <section class="values-section">
            <h2>Our Values</h2>
        </br>
            <div class="styled-box">
            <ul class="values-list">
                <li>Quality ingredients sourced sustainably by our team of skin experts, the highest standard of ingredients in the industry</li>
                <li>Deep commitment to endorsing brands with cruelty-free testing, practices, and commitment to ending animal testing &nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li>Endorsing brands that are explicit about their product formulations, working conditions, and environmental practices &nbsp;</li>
                <li>Empowerment of all individuals through education about skin, the beauty industry, body positivity, and ethical beauty &nbsp;</li>
                <li>Supporting diversity and inclusivity in beauty by uplifting voices of individuals traditionally absent in beauty spaces &nbsp;&nbsp;&nbsp;&nbsp;</li>
            </ul>
        </div>
        </section>
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