<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Diary Display</title>
    <link rel="stylesheet" href="mystyles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F8F4E3;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            flex-wrap: wrap; 
            justify-content: space-between;
            padding: 0 50px; 
            margin-top: 115px;
        }

        .box {
            width: calc(50% - 30px); 
            margin-bottom: 20px; 
            box-sizing: border-box;
            color: #F55D33;
        }

        @media (max-width: 925px) { 
            .box {
                width: 100%;
                margin-right: 0 !important;
            }
        }

        .entry-box {
            border: 5px solid #F55D33;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .wishlist-box{
            border: 5px solid #F55D33;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            min-height: 325px;
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


<div class="container">
<?php
    //Connect to the database
    $servername = "localhost"; 
    $username = "uypgzev6p0j70"; 
    $password = "ouggh5fggnvl";
    $dbname = "dblkyvk0rqhsmk";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Step 2: Retrieve user's data from the form
    //if (isset($_POST['email'])) {
    //    $email = $_POST['email'];
    //} else {
    //    $email = "No email provided";
    //}
    //if (isset($_POST['name'])) {
    //    $name = $_POST['name'];
    //} else {
    //    $name = "No name provided";
    //}
    
    $name = "Isabelle";
    $email = "0@gmail.com";
    ?>
    <div class="box" label="skin_diary" style="margin-right: auto; text-align: center;">
        <!-- skin diary -->
        <?php
            echo "<h3>$name's Skin Diary</h3>";

            //get data from email
            $sql = "SELECT * FROM skin_type_form WHERE email = '$email' ORDER BY id DESC";
            $result = $conn->query($sql);

            //Display all entries
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='entry-box'>";
                    foreach ($row as $key => $value) {
                        // show only certain info
                        if ($key === 'date') {
                            echo "<div class='date'><strong>$key:</strong> <br>$value</div><br>";
                        } if ($key === 'foundation_experience') {
                            echo "<strong>Which option best describes your experience with foundation or makeup?</strong> <br>$value<br>";
                        } if ($key === 'pore_size') {
                            echo "<strong>Which statement best describes the size of your pores?</strong> <br>$value<br>";
                        } if ($key === 'cleanser_reaction') {
                            echo "<strong>How does your skin usually react to cleansers or soaps?</strong> <br>$value<br>";
                        } if ($key === 'breakout_frequency') {
                            echo "<strong>How often do you experience breakouts or acne?:</strong> <br>$value<br>";
                        } if ($key === 'toner_feel') {
                            echo "<strong> How does your skin feel after using a toner?</strong> <br>$value<br>";
                        }
                    }
                    echo "</div><br>";
                }
            } else {
                echo "No entries found";
            }
        ?>
    </div>
    <div class="box" label="wishlist" style="margin-left: auto; text-align: center;">
        <!-- wishlist -->
        <?php
            echo "<h3>$name's Wishlist</h3>";
            echo "<div class='wishlist-box'>";
            
            // Retrieve wishlist items for the given email
            $sql_wishlist = "SELECT * FROM wishlist WHERE email = '$email'";
            $result_wishlist = $conn->query($sql_wishlist);

            // Display wishlist items
            if ($result_wishlist->num_rows > 0) {
                echo "<ul style='list-style-type: none; padding: 0;'>";
                while ($row_wishlist = $result_wishlist->fetch_assoc()) {
                    echo "<li>" . $row_wishlist['item'] . "</li><br>";
                }
                echo "</ul>";
            } else {
                echo "type in an item to add it to the wishlist!";
            }
            
            echo "</div>";
        ?>
    </div>

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


