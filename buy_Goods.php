<?php ob_start();?>
<?php
    include"connect.php";
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
            background-color:maroon;
        }

        form {
            text-align: center;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background-color: #a3a3a3;
        }
    </style>
</head>
<body background="02.jpg">
    <form action="" method="POST">
        <label for="phone">Till Number:</label>
        <input type="number" id="phone" name="phone"><br><br>
    
        <label for="Amount">Enter amount:</label>
        <input type="text" id="Amount"><br><br>

        <label for="password">Enter pin:</label>
        <input type="password" id="password"><br><br>

        <button type="submit">Enter</button>
        <button type="submit">Back</button>
    </form>
</body>
</html>