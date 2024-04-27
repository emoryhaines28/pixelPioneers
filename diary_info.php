<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Diary Display</title>
    <link rel="stylesheet" href="mystyles.css">
    <!-- Internal Stylesheet -->
    <style>
        body {
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

        .skin_diary_container {
            width: calc(100% - 400px); 
            margin-bottom: 20px; 
            justify-content: center;
            box-sizing: border-box;
            color: #F55D33;
        }

        .wishlist_container {
            width: 325px; 
            margin-bottom: 20px; 
            margin: 0 auto;
            box-sizing: border-box;
            color: #F55D33;
        }

        @media (max-width: 925px) { 
            .skin_diary_container,
            .wishlist_container {
                width: 100%;
            }
        }

        .entry-box {
            border: 5px solid #F5CC97;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .wishlist-box{
            border: 5px solid #F5CC97;
            padding: 10px;
            border-radius: 5px;
            min-height: 325px;
            max-width: 350px;
            margin: 0 auto;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            background-color: #F55D33; 
            color: #F8F4E3;
            border: none;
            padding: 7px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 7px;
            font-family: 'American Typewriter', serif;
            display: block;
                margin: 0 auto;
            margin-bottom: 75px;
        }

        input[type="submit"]:hover {
                    background-color: #FF6347;
        }

        .date {
            margin-top: 15px;
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
    
    $name = "No name provided";
    $email = "No email provided";

    // Retrieve user's data from the form
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }

    // Form submission handling for adding items to wishlist
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["self-submission"])) {
        // Retrieve form data from the self-submitting form
        $name = $_POST["name"];
        $email = $_POST["email"];
        $item = $_POST["item"];
        
        // Insert the item into the wishlist table
        $sql_insert = "INSERT INTO wishlist (email, item) VALUES ('$email', '$item')";
        $conn->query($sql_insert);
    }

    ?>
    <div class="skin_diary_container" label="skin_diary" style="margin-right: auto; text-align: center;">
        <!-- skin diary -->
        <?php
            echo "<h2>$name's Skin Diary</h2>";

            //get data from db
            $sql = "SELECT * FROM skin_type_form WHERE email = '$email' ORDER BY id DESC";
            $result = $conn->query($sql);

            //Display all entries
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='entry-box'>";
                    foreach ($row as $key => $value) {
                        // show only skin related questions
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
    <div class="wishlist_container" label="wishlist" style="text-align: center;">
        <!-- wishlist -->
        <?php
            echo "<h2>$name's Wishlist</h2>";
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
                echo "Type in an item to add it to your wishlist!";
            }
            
            echo "</div>";

            echo "add an item to your wishlist:";?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">            
            <?php
            echo "<input type='text' name='item'>";
            echo "<input type='hidden' name='email' value='$email'>";
            echo "<input type='hidden' name='name' value='$name'>";
            echo "<br><br>";
            echo "<input type='submit' name='self-submission' value='add'>";
            echo "</form>";

        ?>  
        </form>
 
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


