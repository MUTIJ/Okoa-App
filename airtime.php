<?php ob_start();?>
<?php
// Include the database connection script (connect.php)
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUY AIRTIME</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            
        }
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: #f8f4f4; /* Grey color */
            color: black ;
            padding: 10px 0;
            text-align: center;
}




        form {
            text-align: center;
            border: 1px solid #0f0f0f;
            padding: 20px;
            border-radius: 5px;
            background-color:aquamarine;
        }
        .bottom-navbar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #faf6f6; /* Grey color */
            color: rgb(10, 10, 10);
            padding: 10px 0;
            text-align: center;
        }
        .bottom-navbar ul {
        list-style: none;
        display: flex;
        justify-content: center;
       }

        .bottom-navbar li {
        margin: 0 20px;
        }

        .bottom-navbar a {
        text-decoration: none;
        color: rgb(10, 10, 10);
        font-weight: bold;
        }

        .bottom-navbar ul {
        display: flex;
        justify-content: space-between;
        padding: 0 20px;
        }
    </style>
</head>
<body background="02.jpg">
    <header>
        <nav class="navbar">
            <p><b>ROCK CITY BANK</b></p>
        </nav>
    </header>
  
    <form action="process_purchase.php" method="POST">
    <label for="phone">Phone Number:</label>
    <input type="text" id="phone" name="phone"><br><br>
    
    <label for="Amount">Enter amount:</label>
    <input type="text" id="Amount" name="amount"><br><br> <!-- Added name attribute -->

    <label for="password">Enter pin:</label>
    <input type="password" id="password" name="pin"><br><br> <!-- Added name attribute -->

    <button type="button" onclick="buyAirtime()">Enter</button> <!-- Use type="button" and add onclick event -->
</form>

    <footer>
        <nav class="bottom-navbar">
            <ul>
                <li>&copy; 2023 Rock City Bank</li> <!-- Copyright notice -->
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
            </ul>
        </nav>
    </footer>
   
    <script>
        function buyAirtime() {
           
            // Show a success prompt
            var confirmation = confirm("Airtime purchase was successful! Click OK to go back to the home page.");

            // If the user clicks OK, redirect to the home page
            if (confirmation) {
                window.location.href = "home.php"; // Replace "home.html" with the actual URL of your home page.
            }
        }
    </script>
</body>
</html>