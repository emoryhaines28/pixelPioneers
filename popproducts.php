<?php

  $server = "localhost"; // server
  $userid = "uvqltawxm5s5p";
  $pw = "peaupass"; // password
  $db = "db7px19gjegudt"; // database
  
  // create a connection
  $conn = new mysqli($server, $userid, $pw);
  
  // verify the connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
  // select the database
  $conn->select_db($db);
  
  $skintype = isset($_GET['skintype']) ? $_GET['skintype'] : null; // Check if parameter exists
  
  $sort = isset($_GET['sort']) ? $_GET['sort'] : 'price_asc'; // Default sorting
  $category = isset($_GET['category']) ? $_GET['category'] : ''; // Default category filter
  
  // Construct SQL query based on sorting and filtering
  $sql = "SELECT * FROM $skintype";
  if (!empty($category)) {
      $sql .= " WHERE category='$category'";
  }
  switch ($sort) {
      case 'price_asc':
          $sql .= " ORDER BY price ASC";
          break;
      case 'price_desc':
          $sql .= " ORDER BY price DESC";
          break;
  }
  
  $result = $conn->query($sql);
  
  // Prepare an array to hold product data
  $products = [];
  
  if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          // Push product data into the array
          $products[] = [
              'category' => $row["category"],
              'image' => $row["image"],
              'price' => $row["price"],
              'link' => $row["link"],
              'name' => $row["name"]
          ];
      }
  }
  
  // Close the database connection
  $conn->close();
  
  // Return the product data as JSON
  header('Content-Type: application/json');
  echo json_encode($products);
  
  
  
    // $server = "localhost"; // server
    // $userid = "unddqryt17ner"; // user id
    // $pw = "dbuser123"; // password
    // $db= "dbipv97pqtpzk8"; // database
            
    // // create a connection
    // $conn = new mysqli($server, $userid, $pw );
    
    // // verify the connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
        
    // // select the database
    // $conn->select_db($db);

    // $skintype = isset($_GET['skintype']) ? $_GET['skintype'] : null; // Check if parameter exists

    // $sql = "SELECT * FROM $skintype";
    // $result = $conn->query($sql);
    
    // // get results
    // $ccounter = 0;
    // $mcounter = 0;
    // $secounter = 0;
    // $sucounter = 0;
    // if ($result->num_rows > 0) 
    // {
    //     while($row = $result->fetch_assoc()) {
    //         if ($row["category"] == "cleanser") {
    //             $ccounter++;
    //             if ($ccounter === 1) {
    //                 echo "<h2>Cleansers</h2>";
    //             }
    //             echo '<div class="box">';
    //             echo '<div class="box-content"><img src="images/'.$row["image"].'"></div>';
    //             echo "<p>Price: $" . $row["price"] . "</p>";
    //             echo '<div class="text"><a href="'.$row["link"].'">'.$row["name"].'</a></div>';
    //             echo '</div>';
    //         }
    //         else if ($row["category"] == "serum") {
    //             $secounter++;
    //             if ($secounter === 1) {
    //                 echo "<h2>Serums</h2>";
    //             }
    //             echo '<div class="box">';
    //             echo '<div class="box-content"><img src="images/'.$row["image"].'"></div>';
    //             echo "<p>Price: $" . $row["price"] . "</p>";
    //             echo '<div class="text"><a href="'.$row["link"].'">'.$row["name"].'</a></div>';
    //             echo '</div>';
    //         }
    //         else if ($row["category"] == "moisturizer") {
    //             $mcounter++;
    //             if ($mcounter === 1) {
    //                 echo "<h2>Moisturizers</h2>";
    //             }
    //             echo '<div class="box">';
    //             echo '<div class="box-content"><img src="images/'.$row["image"].'"></div>';
    //             echo "<p>Price: $" . $row["price"] . "</p>";
    //             echo '<div class="text"><a href="'.$row["link"].'">'.$row["name"].'</a></div>';
    //             echo '</div>';
    //         }
    //         else {
    //             $sucounter++;
    //             if ($sucounter === 1) {
    //                 echo "<h2>Sunscreens</h2>";
    //             }
    //             echo '<div class="box">';
    //             echo '<div class="box-content"><img src="images/'.$row["image"].'"></div>';
    //             echo "<p>Price: $" . $row["price"] . "</p>";
    //             echo '<div class="text"><a href="'.$row["link"].'">'.$row["name"].'</a></div>';
    //             echo '</div>';
    //         }
    //     } 
    // }
    // else {
    //     echo "No results!";
    // }
    //     $conn->close();
?>