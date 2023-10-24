<?php ob_start();?>
<?php
    include"connect.php";
    if(isset($_POST['Submit'])){

    }
?>
<html lang="en">
<head>

    <title>Rock City</title>

    <!-- <link rel="stylesheet" href="style.css"/> -->
</head>
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
        background-color: aquamarine;
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

        .register-button {
        background-color: maroon;
        color: white;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }



</style>



<br>
<br>

<body background="02.jpg">
    <header>
        <nav class="navbar">
            <p><b>ROCK CITY BANK</b></p>            
            <p><b>Register Your Account</b></p>
        </nav>
    </header>
    
    <div class="sign_up">
        <form action="home.php" method="POST" onsubmit="return validateForm()">
            <br><br>

        <label for="countrySelect">Select a county:</label>
<select id="countrySelect">
    <option value="nairobi">Nairobi County</option>
    <option value="mombasa">Mombasa County</option>
    <option value="kisumu">Kisumu County</option>
    <option value="nakuru">Nakuru County</option>
    <option value="eldoret">Eldoret County (Uasin Gishu)</option>
    <option value="nyeri">Nyeri County</option>
    <option value="machakos">Machakos County</option>
    <option value="kisii">Kisii County</option>
    <option value="thika">Thika County (Kiambu)</option>
    <option value="meru">Meru County</option>
    <option value="kakamega">Kakamega County</option>
    <option value="lamu">Lamu County</option>
    <option value="naivasha">Naivasha County (Nakuru)</option>
    <option value="garissa">Garissa County</option>
    <option value="kitale">Kitale County (Trans-Nzoia)</option>
    <option value="nandi">Nandi County</option>
    <option value="bomet">Bomet County</option>
    <option value="bungoma">Bungoma County</option>
    <option value="busia">Busia County</option>
    <option value="siaya">Siaya County</option>
    <option value="vihiga">Vihiga County</option>
    <option value="kakamega">Kakamega County</option>
    <option value="nandi">Nandi County</option>
    <option value="kericho">Kericho County</option>
    <option value="west-pokot">West Pokot County</option>
    <option value="turkana">Turkana County</option>
    <option value="samburu">Samburu County</option>
    <option value="laikipia">Laikipia County</option>
    <option value="nyandarua">Nyandarua County</option>
    <option value="kirinyaga">Kirinyaga County</option>
    <option value="murang">Murang'a County</option>
    <option value="kiambu">Kiambu County</option>
    <option value="nairobi">Nairobi County</option>
    <option value="nyamira">Nyamira County</option>
    <option value="kericho">Kericho County</option>
    <option value="bomet">Bomet County</option>
    <option value="kajiado">Kajiado County</option>
    <option value="nairobi">Nairobi County</option>
    <option value="nakuru">Nakuru County</option>
    <option value="narok">Narok County</option>
    <option value="nakuru">Nakuru County</option>
    <option value="nairobi">Nairobi County</option>
    <option value="nyandarua">Nyandarua County</option>
    <option value="nyeri">Nyeri County</option>
    <option value="kirinyaga">Kirinyaga County</option>
    <option value="murang">Murang'a County</option>
    <option value="kiambu">Kiambu County</option>
    <option value="nairobi">Nairobi County</option>
</select>



        <br><br><br>
        <label>User Name:</label>
            <input type="text" name="name"><br><br>

            <label>Account No:</label>
            <input type="number" name="account"><br><br>

            <label>ID Number:</label>
            <input type="number" name="id"><br><br>

            <label>Phone Number:</label>
            <input type="text" name="phone"><br><br>

            <label>Enter Password:</label>
            <input type="password" name="password"><br><br>

            <label>Confirm Password:</label>
            <input type="password" name="confirmPassword"><br><br>

            <button type="button" onclick="validateForm()">Register</button> <!-- Use type="button" and add onclick event -->
        </form>

<br>
<div>

    <footer>
        <nav class="bottom-navbar">
            <ul>
                <li>&copy; 2023 Rock City Bank</li> <!-- Copyright notice -->
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
            </ul>
        </nav>
    </footer>
    
<script>
    function validateForm() {
        var countrySelect = document.getElementById("countrySelect");
        var name = document.getElementsByName("name")[0].value;
        var account = document.getElementsByName("account")[0].value;
        var id = document.getElementsByName("id")[0].value;
        var phone = document.getElementsByName("phone")[0].value;
        var password = document.getElementsByName("password")[0].value;
        var confirmPassword = document.getElementsByName("confirmPassword")[0].value;

        if (
            countrySelect.value === "" ||
            name === "" ||
            account === "" ||
            id === "" ||
            phone === "" ||
            password === "" ||
            confirmPassword === ""
        ) {
            alert("All slots must be filled.");
            return false;
        }

        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }

        alert("Successful registration!");

        // Redirect to the homepage
        window.location.href = "signin.php"; // Replace "home.html" with your homepage URL
        return true;
    }
</script>

</body>
</html>