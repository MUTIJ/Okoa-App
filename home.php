<?php ob_start();?>
<?php
    include"connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROCK CITY BANK</title>
    <link rel="stylesheet" href="RCY.css"> <!-- Link to your CSS file -->
</head>
<style>
    body{
        background-image: url(02.jpg);
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
        #floating-button {
        position: fixed;
        top: 25px;
        right: 20px;
        cursor: pointer;
        }

        /* Styles for the dropdown menu */
        #menu-dropdown {
        position: absolute;
        top: 40px;
        right: 0;
        background-color: white;
        box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        }

        /* Styles for list items */
        #menu-dropdown ul {
        list-style-type: none;
        padding: 0;
        }

        #menu-dropdown li {
        padding: 10px 20px;
        cursor: pointer;
        }

        /* Additional styles for website content */
        #content {
        padding: auto;
        }
        #floating-menu {
        position: fixed;
        top: 20px;
        right: 100px;
        border-radius: 20px;
        background-color: aquamarine;
        padding: 10px;
        cursor: pointer;
        border: 1px solid #ccc;
        }

        #menu-options {
        display: none;
        position: absolute;
        top: 30px;
        right: 0;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding: 10px;
        }

        #menu-options a {
        display: block;
        margin: 5px 0;
        text-decoration: none;
        color: #333;
        }

        #menu-options a:hover {
        color: blue;
        }
        
        .button-container {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .font-button {
            padding: 10px;
            background-color: maroon;
            color: #ffffff;
            border: none;
            cursor: pointer;
            border-radius: 20px;
            margin: 5px;
        }
        ul {
            list-style-type: none;
        }

        li {
            display: inline;
            margin-right: 10px;
            position: relative;
        }

        ul ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        li:hover ul, .sub-menu.show {
            display: block;
        }

        li:hover ul li, .sub-menu.show li {
            display: block;
        }

        .sub-menu li {
            display: none;
        }

        .sub-menu a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
        }

        .sub-menu a:hover {
            background-color: #f0f0f0;
        }
        #sign-out-button {
        background-color: #f44336; /* Red background color */
        color: white; /* White text color */
        border: none; /* No border */
        padding: 10px 20px; /* Padding around the text */
        text-align: center; /* Center text within the button */
        text-decoration: none; /* No underline for text */
        display: inline-block;
        font-size: 16px;
        margin: 10px; /* Margin to separate it from other content */
        cursor: pointer; /* Cursor style on hover (pointer) */
        border-radius: 5px; /* Rounded corners */
    }

    #sign-out-button:hover {
        background-color: #d32f2f; /* Darker red background color on hover */
    }

    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const aboutLink = document.querySelector(".about-link");
            const subMenu = document.querySelector(".sub-menu");

            aboutLink.addEventListener("click", function(e) {
                e.preventDefault();
                subMenu.classList.toggle("show");
            });
        });
    </script>

    </style>
<body >



       <div id="content">
                <header>
                <nav class="navbar">
                    <ul>
                        <li><a href="pay.php">Pay </a></li>
                        
                    <li ><a href="">Send Money</a>
                    <ul class="sub-menu">
                        <li><a href="Another_Bank.php">Another Bank</a></li>
                        <li><a href="Mobile.php">Mobile money</a></li>
                        <li><a href="RockCity.php">Transfer Same Bank</a></li>
                    </ul>
                    </li>
                        <li><a href="airtime.php">Buy Airtime</a></li>
                        <li><a href="loans.php">Loans</a></li>
                        <li><a href="help.php">FAQ</a></li>
                    </ul>
                </nav>
            </header>

    <div class="button-container">
        <button id="increaseFontSize" class="font-button">+</button>
        <button id="decreaseFontSize" class="font-button">-</button>
    </div>
            <div class="word-box">
                <p>Welcome to ROCK CITY BANK </p>
                <div class="upper-left">
                    WASHINGTON LECKIE MILONGO JR
                </div><br>
                <div class="lower-left">
                    Ksh.128,767 Savings
                </div>
            </div>
     
   
    
   
    <footer>
        <nav class="bottom-navbar">
            <ul>
                <li>&copy; 2023 Rock City Bank</li> <!-- Copyright notice -->
                <li>Privacy Policy</li>
                <li>Terms of Service</li>
            </ul>
        </nav>
    </footer>
</div>
    
<script src="script.js">

</script>
<script src="home.js"></script>
        
</body>


</html>
