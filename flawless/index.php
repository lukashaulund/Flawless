<?php
require "settings/init.php";

if(!empty($_POST["data"])){
    $data = $_POST["data"];

    $sql = "INSERT INTO user (userFullName, userEmail) VALUES (:userFullName, :userEmail)";
    $bind = [":userFullName" => $data["userFullName"], ":userEmail" => $data["userEmail"]];

    $db -> sql($sql, $bind, false);

    echo "ny bruger oprettet";
    exit;
}
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Startside | Flawless</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/startup-styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <header>
        <h1>Velkommen til</h1>
        <img src="img/flawless-type-logo.svg" alt="">
    </header>

    <div id="container">
        <div id="switch">
            <div class="switchBtn switchActive">
                <p>Opret Konto</p>
            </div>
            <div class="switchBtn">
                <p>Login</p>
            </div>
        </div>
        <form method="post" action="index.php" class="startType startTypeActive" id="register">
            <div class="inputField">
                <img src="img/person-icon.svg" alt="">
                <input class="input-form" type="text" name="data[userFullName]" id="userFullName" placeholder="Fulde Navn" value="">
            </div>
            <div class="inputField">
                <img src="img/email-icon.svg" alt="">
                <input class="input-form" type="email" name="data[userEmail]" id="userEmail" placeholder="Email" value="">
            </div>
            <div class="seperator">
                <span class="sep-line"></span>
                <p>eller</p>
                <span class="sep-line"></span>
            </div>
            <div class="thirdParty">
                <p>Opret med Google</p><img src="img/google-icon.svg" alt="">
            </div>
            <div class="thirdParty">
                <p>Opret med Apple</p><img src="img/apple-icon.svg" alt="">
            </div>
            <div class="submit">
                <button type="submit" id="btnSubmit">Opret</button>
            </div>
        </form>
        <form method="post" action="index.php" class="startType" id="login">
            <div class="inputField">
                <img src="img/email-icon.svg" alt="">
                <input class="input-form" type="email" name="data[userEmail]" id="userEmail" placeholder="Email" value="">
            </div>
            <div class="inputField">
                <img src="img/password-icon.svg" alt="">
                <input class="input-form" type="password" name="data[userPassword]" id="userPassword" placeholder="******" value="">
            </div>
            <div class="seperator">
                <span class="sep-line"></span>
                <p>eller</p>
                <span class="sep-line"></span>
            </div>
            <div class="thirdParty">
                <p>Login med Google</p><img src="img/google-icon.svg" alt="">
            </div>
            <div class="thirdParty">
                <p>Login med Apple</p><img src="img/apple-icon.svg" alt="">
            </div>
            <div class="submit">
                <button type="submit" id="btnSubmit">Login</button>
            </div>
        </form>
    </div>




<!--
    <form method="post" action="index.php">
        <div class="row">
            <div class="col-12 col-md-6">
                <label for="prodName">Produkt navn</label>
                <input class="form-control" type="text" name="data[prodName]" id="prodName" placeholder="Produkt navn" value="">
            </div>
            <div class="col-12 col-md-6">
                <label for="prodPrice">Produkt pris</label>
                <input class="form-control" type="number" step="0.1" name="data[prodPrice]" id="prodPrice" placeholder="Produkt pris" value="">
            </div>
            <div class="col-12">
                <label for="prodDesc">Produkt beskrivelse</label>
                <textarea class="form-control" name="data[prodDesc]" id="prodDesc"></textarea>
            </div>
            <div class="col-12 col-md-6 offset-md-6">
                <button class="form-control btn btn-primary" type="submit" id="btnSubmit">opret produkt</button>
            </div>
        </div>
    </form>
-->
    <script>
        document.getElementById("switch").addEventListener("click", () =>{
            let btns = document.getElementsByClassName("switchBtn")
            let startTypes = document.getElementsByClassName("startType")
            for(let btn of btns){
                btn.classList.toggle("switchActive")
            }
            for(let startType of startTypes){
                startType.classList.toggle("startTypeActive")
            }
        })
    </script>
</body>
</html>
