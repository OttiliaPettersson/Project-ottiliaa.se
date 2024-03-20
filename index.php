<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ottiliaa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include("gtm.head.php"); ?>
</head>
<body>
    <?php include("gtm.body.php"); ?>

    <?php include("header.php"); ?>

    <h1>Welcome to my website!</h1>
    <p>Use the login details below to log in to my website:</p>
    <p>Username: Jultomte</p>
    <p>Password: Vinter23</p>


    <?php include("login.php"); ?>

    <div class="social_nav">
            <a class="socials">
            <a href="https://www.vinge.se/medarbetare/ottilia-pettersson/" target="_blank"><img src="linkedin.bild" alt="linkedIn" style="width: 30px;"></a>
            <a href="https://www.instagram.com/ottiliapetterssonn/" target="_blank"><img src="ny.instagram.bild" alt="instagram" style="width: 30px;"></a>
            <a href="share" target="_blank"><img src="shareicon.svg" alt="Share-icon.bild" style="width: 30px;"></a>
    </div>

    <div id="cookie-popup" class="cookie-popup">
        <p>By clicking on "Close and accept", you confirm that you have read our cookie policy and that you comply with our use of cookies. You can read more in our c​ookie policy​.
        <button onclick="closeCookiePopup()">Close and accept</button>
        <script src="java.js" defer></script>
    </div>

    <footer>
        <p> Copyright © Ottilia Pettersson. We use cookies - <a href="/cookiepolicy">read more here.</a></p>
    </footer>
</body>
</html>