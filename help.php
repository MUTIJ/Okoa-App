<?php ob_start();?>
<?php
    include"connect.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rock City Bank Help Center</title>
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-image: url("02.jpg"); /* Background image URL */
        background-size: cover;
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

    .faq-section {
        background-color: rgba(255, 255, 255, 0.8); /* Light background color with transparency */
        padding: 20px;
        border-radius: 10px;
    }

    .faq-table {
        width: 100%;
        border-collapse: collapse;
    }

    .faq-table th, .faq-table td {
        padding: 10px;
        border: 1px solid #ccc;
    }

    .redirect-button {
        background-color: aquamarine; /* Button background color */
        color: rgb(10, 0, 0);
        padding: 10px;
        text-align: center;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        display: block;
        margin: 20px auto;
    }
</style>
<body background="02.jpg">
    <header>
        <nav class="navbar">
            <p><b>ROCK CITY BANK</b></p>
        </nav>
    </header>

    <section class="faq-section">
        <h2>Frequently Asked Questions</h2>

        <table class="faq-table">
            <tr>
                <th>Question</th>
                <th>Answer</th>
            </tr>
            <tr>
                <td>How do I reset my password?</td>
                <td>To reset your password, go to the login page and click on the "Forgot Password" link. Follow the instructions to reset your password.</td>
            </tr>
            <tr>
                <td>How can I check my account balance?</td>
                <td>You can check your account balance by going to the homepage it is displayed at the middle with your name as well.</td>
            </tr>
            <tr>
                <td>What should I do if I suspect fraudulent activity on my account?</td>
                <td>If you suspect fraudulent activity, contact our customer support immediately on the number +254745947320 or visit the nearest bank branch to you.</td>
            </tr>
        </table>

        <button class="redirect-button" onclick="window.location.href='home.php'">Go to Home Page</button>
    </section>

    <footer>
        <nav class="bottom-navbar">
            <ul>
                <li>&copy; 2023 Rock City Bank</li> <!-- Copyright notice -->
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>
