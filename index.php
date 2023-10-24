<?php ob_start();?>
<?php
    include"connect.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>RockCity Bank</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            min-height: 60vh;
            /* background-color: maroon; */
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .logo {
            text-align: center;
            padding: 20px;
        }

        .logo img {
            width: 100px;
            height: 80px;
            border-radius: 20px;
        }

        .center-box {
            display: flex;
            float: right;
            justify-content: center;
        }

        .box {
            text-align: center;
            border: 2px solid gray;
            padding: 1vh 1vh;
            background-color: orange;
            margin: 10px;
            border-radius: 20px;
        }
        
        .box1 {
            text-align: center;
            border: 2px solid gray;
            padding: 1vh 1vh;
            background-color: orange;
            margin: 10px;
            border-radius: 20px;
        }
        .box a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: black;
        }
        .box1 a {
            display: block;
            float: right;
            padding: 10px;
            text-decoration: none;
            color: black;
        }

        /* .image-rotator {
            width: 550px;
            height: 300px;
            background-image: url('11.jpg');
            background-size: cover;
            background-position: center;
            animation: rotateImages 1s linear infinite;
        }

        @keyframes rotateImages {
            0% {
                background-image: url('13.jpeg');
            }
            25% {
                background-image: url('02.jpg');
            }
            50% {
                background-image: url('06.jpg');
            }
            75% {
                background-image: url('04.jpg');
            }
            100% {
                background-image: url('12.jpeg');
            }
        } */

        .welcome-message {
            text-align: center;
            padding: 20px;
            color: black;
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
        .bottom-navbar ul {
        display: flex;
        justify-content: space-between;
        padding: 0 20px;
        }
    </style>
</head>
<body background="02.jpg">
    <div class="logo">
        <img src="001.png" alt="Bank Logo">
    </div>

    <div class="center-box">
    <div class="box">
        <a href="register.php">Register</a>
    </div>
    <div class="box1">
        <a href="signin.php">Sign In</a>
    </div>
</div>

<div class="button-container">
        <button id="increaseFontSize" class="font-button">+</button>
        <button id="decreaseFontSize" class="font-button">-</button>
    </div>

    <h1>Font Size Changer</h1>

    <script>
        const increaseFontSize = document.getElementById('increaseFontSize');
        const decreaseFontSize = document.getElementById('decreaseFontSize');
        const body = document.body;

        increaseFontSize.addEventListener('click', () => {
            changeFontSize(2);
        });

        decreaseFontSize.addEventListener('click', () => {
            changeFontSize(-2);
        });

        function changeFontSize(value) {
            const currentSize = parseInt(getComputedStyle(body).fontSize, 10);
            const newSize = currentSize + value + 'px';
            body.style.fontSize = newSize;
        }
    </script>
    <div class="welcome-message">
        <h1>Welcome to RockCity Bank</h1>
        <p><b>We're here to help you with your financial needs.</b></p>
    </div>

    <div class="image-rotator"></div>

    <footer class="bottom-navbar">
        <ul>
            <li>&copy; 2023 Rock City Bank</li>
            <li>Privacy Policy</li>
            <li>Terms of Service</li>
        </ul>
    </footer>
</body>
</html>
