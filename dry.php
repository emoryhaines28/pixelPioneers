<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>dry skin</title>
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
            margin-top: 20px;
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
    <script>
document.addEventListener('DOMContentLoaded', function () {
    const filterForm = document.querySelector('.filter-form form');
    const productContainer = document.querySelector('.product-container');

    filterForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        const formData = new FormData(filterForm); // Get form data
        const url = filterForm.getAttribute('action'); // URL to send AJAX request

        // Send AJAX request
        fetch(url + '?' + new URLSearchParams(formData), {
            method: 'GET',
        })
        .then(response => response.json()) // Parse response as JSON
        .then(data => {
            // Clear existing products in the container
            productContainer.innerHTML = '';

            // Check if data is not empty
            if (data.length > 0) {
                data.forEach(product => {
                    // Create HTML for each product
                    const productHTML = `
                        <div class="box">
                            <div class="box-content"><img src="images/${product.image}"></div>
                            <p>Price: $${product.price}</p>
                            <div class="text"><a href="${product.link}">${product.name}</a></div>
                        </div>
                    `;
                    productContainer.insertAdjacentHTML('beforeend', productHTML); // Add product HTML to container
                });
            } else {
                productContainer.innerHTML = '<p>No results found.</p>'; // Display message if no results
            }
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
    });
});

</script>
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
        <h1>Dry Skin</h1>
        <div class="small">
          Revitalize dry skin with our curated selection of products tailored for hydration. 
          Gentle cleansers cleanse without stripping natural oils. Luxurious moisturizers 
          lock in moisture and strengthen the skin barrier. Intensive ointments soothe and 
          protect, while humectant serums attract moisture for a supple complexion. 
          Broad-spectrum sunscreens shield from damage. Use a humidifier for optimal moisture. 
          Consistency is key for radiant, replenished skin.

            </br></br>These are our favorite products for dry skin and we hope you love them too!
        </div>
        <div class="container">
            <!-- Filter form with dropdown menus -->
            <div class="filter-form">
                <form action="popproducts.php" method="GET">
                    <label for="sort">Sort By:</label>
                    <select name="sort" id="sort">
                        <option value="price_asc">Price Low to High</option>
                        <option value="price_desc">Price High to Low</option>
                    </select>
                    <label for="category">Filter By Category:</label>
                    <select name="category" id="category">
                        <option value="">All Categories</option>
                        <option value="cleanser">Cleansers</option>
                        <option value="serum">Serums</option>
                        <option value="moisturizer">Moisturizers</option>
                        <option value="sunscreen">Sunscreens</option>
                    </select>
                     <input type="hidden" name="skintype" value="dry">
                    <input type="submit" value="Apply Filters">
                </form>
            </div>
            <!-- Products display section -->
            <div class="product-container">
                
            </div>
        </div>
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
