<!DOCTYPE html>
<html>
<head>
    <title>Transfer Money to Mobile</title>
    <style>
        body {
            background-color: maroon;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .form-container label, .form-container input {
            display: block;
            margin: 10px 0;
        }
        .form-container button {
            background-color: blue; /* Set your desired background color here */
            color: white; /* Text color for contrast */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body background="02.jpg">
    <div class="form-container">
        <form action="process_mobile_transfer.php" method="post">
            <label for="account_number">Your Bank Account Number:</label>
            <input type="text" id="account_number" name="account_number" required>

            <label for="mobile_number">Recipient's Mobile Number:</label>
            <input type="tel" id="mobile_number" name="mobile_number" required>

            <label for="amount">Amount (in your currency):</label>
            <input type="number" id="amount" name="amount" required>

            <button type="submit">Transfer Money</button>
        </form>
    </div>
</body>
</html>

