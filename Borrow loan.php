<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow Loan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

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
<body background="4.jpeg">
    <div class="navbar">
        <a href="#">Persoanal Loan</a>
        <a href="#">Home Loan</a>
        <a href="#">Car Loan</a>
        <a href="#">Education Loan</a>
        <a href="#">Business Loan</a>
    </div>

    <div class="header">
        <h1>RockCity Bank</h1>
        <h2>Loan Application</h2>
    </div>

    <div class="container">
        <div class="options">
            <a href="#" class="option">Persoanal</a>
            <a href="#" class="option">Home</a>
            <a href="#" class="option">Car</a>
            <a href="#" class="option">Education</a>
            <a href="#" class="option">Business</a>
        </div> 

        <h2>Loan Application Form</h2>

        <form action="#" method="post">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="loanAmount">Loan Amount:</label>
            <input type="number" id="loanAmount" name="loanAmount" required><br>

            <label for="loanType">Loan Type:</label>
            <select id="loanType" name="loanType" required>
                <option value="personal">Personal Loan</option>
                <option value="car">Car Loan</option>
                <option value="home">Home Loan</option>
                <option value="business">Business Loan</option>
                <option value="education">Education Loan</option>
            </select><br>

            <label>Repayment Period:</label><br>
            <input type="radio" id="shortTerm" name="repaymentPeriod" value="shortTerm" required>
            <label for="shortTerm">Short Term (1-3 years)</label><br>
            <input type="radio" id="mediumTerm" name="repaymentPeriod" value="mediumTerm" required>
            <label for="mediumTerm">Medium Term (4-7 years)</label><br>
            <input type="radio" id="longTerm" name="repaymentPeriod" value="longTerm" required>
            <label for="longTerm">Long Term (8+ years)</label><br>

            <input type="submit" value="