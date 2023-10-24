<?php ob_start();?>
<?php
    include"connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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
            <p><b>Sign into Your Account</b></p>
        </nav>
    </header>
<form action="home.php" method="POST">
          
        <label for="Amount">Name:</label>
        <input type="text" id="Amount"><br><br>

        <label for="password">Enter Password:</label>
        <input type="password" id="password"><br><br>

        <button type="submit">Sign in</button>
       
    </form>
    <footer>
    <nav class="bottom-navbar">
            <ul>
                <li>&copy; 2023 Rock City Bank</li> <!-- Copyright notice -->
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <p>By creating an account, you agree to out Terms and conditions</p>
            </ul>
        </nav>
        
    </footer>
</body>
</html>