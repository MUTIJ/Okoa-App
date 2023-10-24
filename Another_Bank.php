<!DOCTYPE html>
<html>
<head>
    <title>External Bank Transfer</title>
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
            background-color: aquamarine;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .form-container label, .form-container input, .form-container button {
            display: block; 
            margin: 10px 0; 
        }

        .form-container button {
            background-color: blue; 
            color: white; 
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body background="02.jpg">
    <div class="form-container">
        
        <form action="process_external_transfer.php" method="post">

            <label for="account_from">From Account Number:</label>
            <input type="text" id="account_from" name="account_from" required>

            <label for="account_to">To Account Number:</label>
            <input type="text" id="account_to" name="account_to" required>

            <label for="amount">Amount (in your currency):</label>
            <input type="number" id="amount" name="amount" required>

            <label for="account_to">Type Name Of The Bank:</label>
            <input type="text" id="account_to" name="account_to" required>

            <button type="submit">DONE</button>
        </form>
    </div>
</body>
</html>


