<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width", initial-scale="1">
<title> Skin Type Form </title>

<link rel="stylesheet" href="mystyles.css">
<!-- Internal Stylesheet -->
<style type="text/css">

  #form-container {
      margin: auto;
      margin-top: 100px;
      color: #F55D33; 
      background-color: #F8F4E3;
      padding: 20px;
      max-width: 575px; 
      width: 80%; 
      border-radius: 10px; 
      border: 5px solid #F55D33;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
      max-height: 70vh; 
      overflow-y: auto; 
  }

  #form-container h1 {
        text-align: center;
  }

  input[type="text"], select {
    border: 1px #FFF;
    border-radius: 5px;
  }

  h2 {
    color:#F55D33;
  }

  body {
    font-family: 'American Typewriter', serif;
    color: #333;
    background-image: url('images/background.jpg'); 
   
  }

  select {
    margin-top: 10px;
    color: #F55D33;
  }

  div.checkbox-group {
    margin-bottom: 5px;
    margin-top: 10px; 
  }

  div.checkbox-group input[type="checkbox"] {
      display: inline-block;
      margin-bottom: 5px;
      margin-right: 5px; 
  }

  div.checkbox-group label {
      display: block;
      margin-bottom: 5px;
  }

  .radio-group {
    display: flex;
    align-items: center;
  }

  .radio-group div {
    margin-right: 20px; 
  }

  .radio-group input[type="radio"] {
    margin-right: 5px; 
  }

  .popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    z-index: 1000;
    text-align: center;
}

  .popup button {
      background-color: #F57F33;
      color: #F5CC97;
      border: none;
      padding: 10px 20px;
      margin-top: 10px;
      cursor: pointer;
      margin: 10px;
  }


  input[type="submit"] {
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
      display: block;
        margin: 0 auto;
  }

  input[type="submit"]:hover {
            background-color: #FF6347;
  }

  @media only screen and (max-width: 768px) {
    #form-container {
      margin-bottom: 40px; 
    }
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

  <!-- Skin Form -->
  <div id="form-container">
  <h1>What is your skin type?</h1>
	<form id="my_form" action="submit_form.php" method="post" onsubmit="event.preventDefault(); processFormData()">
    <label>Name:</label> <input type="text" name='name' id='the_name'>
    <br /><br />
    <label>Email:</label> <input type="text" name='email' id='the_email'>
    <br /><br />
    <label>Do you consent to email notifications?</label> 
    <div class="radio-group">
      <div>
        <input type="radio" id="consent_yes" name="email_consent" value=1> 
        <label for="consent_yes">Yes</label>
      </div>
      <div>
        <input type="radio" id="consent_no" name="email_consent" value=0> 
        <label for="consent_no">No</label>
      </div>
    </div>
      <div class="checkbox-group">
        <label> Which options best describe your experience with foundation or makeup?</label>
        <input type="checkbox" id="slide" name="slide" value="Makeupslide">Makeup tends to slide off easily
        <br>
        <input type="checkbox" id="good" name="good" value="well">Makeup adheres well, no sliding or flaking
        <br>
        <input type="checkbox" id="cake" name="cake" value="cakey">Makeup tends to cake in some areas while disappearing in others
      </div>
    <br />
      Which statement best describes the size of your pores?
      <select id="poreSize" name="poreSize">
      <option value="enlarged">Enlarged</option>
      <option value="small">Small and barely visible</option>
      <option value="mix">A mix of enlarged and small</option></select>
    <br /><br />
      How does your skin usually react to cleansers or soaps?
      <select id="cleanser" name="cleanser">
      <option value="tight">Feels tight and dry</option>
      <option value="balanced">Feels comfortable and balanced</option>
      <option value="oily">Becomes oily shortly after washing</option></select>
    <br /><br />	
      How often do you experience breakouts or acne? <br />	
      <select id="breakouts" name="breakouts">
      <option value="frequent">Frequently</option>
      <option value="occasional">Occasionally</option>
      <option value="rarely">Rarely</option></select>
    <br /><br />	
      How does your skin feel after using a toner?
      <select id="toner" name="toner">
      <option value="tight">Tight and dry</option>
      <option value="fresh">Fresh and balanced</option>
      <option value="refreshed">Some areas feel refreshed, 
        others may feel tight or oily</option></select>
    <br /><br />	
    <input type = "submit" value = "go!">
	</form>
  </div>

  <script>
    //check if form has been resubmitted from uploading info
    const urlParams = new URLSearchParams(window.location.search);
    const success = urlParams.get('success');
    const name = urlParams.get('name');
    const email = urlParams.get('email');
    const cleanser = urlParams.get('cleanser');

    // Check if the form was successfully submitted
    if (success === 'true') {
        // Call the showResultPopup() function with the retrieved parameters
        var skinType = "Unknown";
        if (cleanser == "oily") {
            skinType = "Oily";
        } else if (cleanser == "tight") {
            skinType = "Dry";
        } else if (cleanser == "balanced") {
            skinType = "Combination";
        }
        showResultPopup(name, email, skinType);
    }

    // Store form data 
    function processFormData() {
        // store text values
        var name = document.getElementById('the_name').value;
        var email = document.getElementById('the_email').value;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
        // Validate email address
        if (!emailRegex.test(email)) {
            alert("Please enter a valid email address.");
            return; //Email is valid
        }

        // store question values
        var yes = document.getElementById('consent_yes').value;
        var no = document.getElementById('consent_no').value;

       
        var slide = document.getElementById('slide').checked;
        var good = document.getElementById('good').checked;
        var cake = document.getElementById('cake').checked;

      
        var poreSize = document.getElementById('poreSize').value;
        var cleanser = document.getElementById('cleanser').value;
        var breakouts = document.getElementById('breakouts').value;
        var toner = document.getElementById('toner').value;

        // Assign individuals skin types based on their 
        // response to how they react to cleansers
        var skinType = "Unknown";
        if (cleanser == "oily") {
            skinType = "Oily";
        } else if (cleanser == "tight") {
            skinType = "Dry";
        } else if (cleanser == "balanced") {
            skinType = "Combination";
        } 
      // Submit the form programmatically
      document.getElementById("my_form").submit();
      showResultPopup(name, email, skinType);

    }
    
    // This function displays the users information
    // and the type of skin type they have
    function showResultPopup(name, email, skinType) {
      var popup = document.createElement("div");
      popup.className = "popup";
      popup.innerHTML = "<p>Name: " + name + "</p><p>Email: " + email + "</p><p>Your Skin Type: " + skinType + "</p>";

      var closeButton = document.createElement("button");
      var skinPageButton = document.createElement("button");

      skinPageButton.textContent = "see products for me";
      closeButton.textContent = "close";

      // Reset the form to the default values
      closeButton.onclick = function () {
          document.body.removeChild(popup);
          document.getElementById('the_name').value = "";
          document.getElementById('the_email').value = "";
          document.getElementById('consent_yes').checked = false; 
          document.getElementById('consent_no').checked = false;
          document.getElementById('slide').checked = false;
          document.getElementById('good').checked = false;
          document.getElementById('cake').checked = false;
          document.getElementById('poreSize').value = "enlarged";
          document.getElementById('cleanser').value = "tight";
          document.getElementById('breakouts').value = "frequent";
          document.getElementById('toner').value = "tight";
      }

      // Go to skin type page
      skinPageButton.onclick = function () {
        navigateToSkinPage(skinType);
      }

      popup.appendChild(closeButton);
      popup.appendChild(skinPageButton);
      document.body.appendChild(popup);

    }

    // Send to the correct page based on skin type
    function navigateToSkinPage(skinType) {
      if (skinType == "Oily") {
          window.location.href = "oily.php";
      } else if (skinType == "Dry") {
          window.location.href = "dry.php";
      } else {
          window.location.href = "combination.php";
      }
  }

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