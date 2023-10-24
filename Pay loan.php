<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Loan</title>
    <style>
/* body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        } */

        .navbar {
            background-color:aquamarine;
            overflow: hidden;
            text-align: right;
        }

        .navbar a {
            display: inline-block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 18px;
            text-decoratoion: none;
        }

        .navbar a:hover {
            background-color: #333;
        }

        .header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        .header h1, .header h2 {
            font-size: 36px;
        }

        .container {
            width: 60%;
            margin: 0 auto;
            background-color: aquamarine;
            border: 2px solid #333;
            border-radius: 10px;
            padding: 20px;
            max-width: 600px;
            color: black;
        }

        .container form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .container form input,
        .container form select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .container form input[type="radio"] {
            margin-right: 8px;
            margin-bottom: 0;
        }

        .container form input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .container form input[type="submit"]:hover {
            background-color: #555;
        }

        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body background="02.jpg">
    <div class="navbar">
        <a href="#">Personal loan</a>
        <a href="#">Home loan</a>
        <a href="#">Car loan</a>
        <a href="#">Education Loan</a>
        <a href="#">Business Loan</a>
    </div>

    <div class="header">
        <h1>Pay a Loan</h1>
        <h2>Select a loan to pay:</h2>
    </div>

    <div class="container">
        <div class="options">
            <!-- <a href="#" class="option">Personal</a>
            <a href="#" class="option">Home</a>
            <a href="#" class="option">Car</a>
            <a href="#" class="option">Education</a>
            <a href="#" class="option">Businesss</a> -->
            <h2>Loan Payment Form</h2>

    <form action="#" method="post">
        <label>Select type of loan to pay:</label><br>
        <input type="radio" id="personalLoan" name="loanType" value="personal" required>
        <label for="personalLoan">Personal Loan</label><br>
        <input type="radio" id="carLoan" name="loanType" value="car" required>
        <label for="carLoan">Car Loan</label><br>
        <input type="radio" id="homeLoan" name="loanType" value="home" required>
        <label for="homeLoan">Home Loan</label><br>
        <input type="radio" id="businessLoan" name="loanType" value="business" required>
        <label for="businessLoan">Business Loan</label><br>
        <input type="radio" id="educationLoan" name="loanType" value="education" required>
        <label for="educationLoan">Education Loan</label><br>

        <label for="paymentMethod">Select Payment Method:</label>
        <select id="paymentMethod" name="paymentMethod" required>
            <option value="bank">Pochi la biashara</option>
            <option value="paybill">Paybill</option>
            <option value="buygoods">Buy Goods</option>
            <br>
            
        </div>
    </div>

    
        
        <input type="submit" value="Submit">
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const paymentMethodSelect = document.getElementById('paymentMethod');

            paymentMethodSelect.addEventListener('change', function() {
                const selectedValue = this.value;

                switch (selectedValue) {
                    case 'bank':
                        window.location.href = "pochilabiashara.php"; // Replace with actual bank URL
                        break;
                    case 'paybill':
                        window.location.href = "pay.php"; // Replace with actual paybill URL
                        break;
                    case 'buygoods':
                        window.location.href = "buy_Goods.php"; // Replace with actual buy goods URL
                        break;
                }
            });
        });
    </script>
</body>
</html>
