<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Establish a connection to your database
    $servername = "localhost"; 
    $username = "uypgzev6p0j70"; 
    $password = "ouggh5fggnvl";
    $dbname = "dblkyvk0rqhsmk";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert data into your database
    $sql = "INSERT INTO skin_type_form (name, email, notifications, foundation_experience, pore_size, cleanser_reaction, breakout_frequency, toner_feel)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    
    // Get form data from $_POST array
    $name = $_POST['name'];
    $email = $_POST['email'];
    $notifications = $_POST['email_consent']; // Use email_consent to populate notifications column
    $foundation_experience = "";
    if(isset($_POST['slide']) && $_POST['slide'] == "Makeupslide") {
        $foundation_experience .= "Makeup tends to slide off easily, ";
    }
    if(isset($_POST['good']) && $_POST['good'] == "well") {
        $foundation_experience .= "Makeup adheres well, no sliding or flaking, ";
    }
    if(isset($_POST['cake']) && $_POST['cake'] == "cakey") {
        $foundation_experience .= "Makeup tends to cake in some areas while disappearing in others";
    }
    $pore_size = $_POST['poreSize'];
    $cleanser_reaction = $_POST['cleanser'];
    $breakout_frequency = $_POST['breakouts'];
    $toner_feel = $_POST['toner'];

    // Bind parameters to the SQL statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $name, $email, $notifications, $foundation_experience, $pore_size, $cleanser_reaction, $breakout_frequency, $toner_feel);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Close statement and connection
        $stmt->close();
        $conn->close();

        // Redirect to the form page after successful form submission
        $redirectUrl = "form.html?";
        $redirectUrl .= "success=true";
        $redirectUrl .= "&name=" . urlencode($_POST['name']);
        $redirectUrl .= "&email=" . urlencode($_POST['email']);
        $redirectUrl .= "&cleanser=" . urlencode($_POST['cleanser']);
        header("Location: " . $redirectUrl);
        exit();
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

} else {
    // Redirect to the form page if accessed directly
    header("Location: form.html");
    exit();
}
?>
