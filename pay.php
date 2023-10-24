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
            /* display: flex; */
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            display: flex;
            background-color:maroon;
        }

        form {
            text-align: center;
            border: 1px solid #ccc;
            padding: 20px;
            margin: auto;
            padding: 5px;
            height: auto;
            width: 39%;
            border-radius: 5px;
            background-color: #a3a3a3;
            margin-top: 15%;
        }


.dropdown {
    width: 200px;
    margin: 0 auto;
    margin-top: 50px;
    background-color: grey;
}

#paymentSelect {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f8f8f8;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    /* background: url('arrow.png') no-repeat; */
    background-position: 95% center;
    cursor: pointer;
}

#paymentSelect:focus {
    outline: none;
    border-color: #007bff;
}

#paymentSelect::-ms-expand {
    display: none;
}

#paymentSelect::-webkit-select {
    display: none;
}
        
    </style>
</head>
<body background="02.jpg">
    <form action="" method="POST">
        <div class="dropdown">
            <select id="paymentSelect" onchange="navigateToPage()">
                <a href=> </a>
                
                <option value="paybill">Pay Bill</option>
                <option value="buyGoodsServices">Buy Goods and Services</option>
                <option value="pochiLaBiashara">Pochi la Biashara</option>
            </select>
            
        </div>
        <br><br><br><br>
        <label for="phone">Business Number:</label>
        <input type="text" id="phone" name="phone"><br><br>

        <label for="Amount">Account Number:</label>
        <input type="text" id="Amount"><br><br>
    
        <label for="Amount">Enter amount:</label>
        <input type="text" id="Amount"><br><br>

        <label for="password">Enter pin:</label>
        <input type="password" id="password"><br><br>

        <button type="submit">Ok</button>
        <button type="submit">Back</button>
    </form>
</body>
<script src="paybill.js"></script>
</html>