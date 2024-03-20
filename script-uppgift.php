<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script-uppgift</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include("gtm.head.php"); ?>
</head>
<body>
    <?php include("gtm.body.php"); ?>

    <?php include("header2.php"); ?>

    <script src="buttonclick.js" defer></script>
    <script src="linkclick.js" defer></script>
    <script src="form.js" defer></script>
    <script src="location.js" defer></script>
    <script src="scrolldepth.js" defer></script>

    <h1>Script-uppgift</h1>

     <!-- En container för att visa flaggan -->
     <div id="flagContainer"></div>

    <div class="row">

    <div class="col">
            <h2>Tryck på nedan knappar för mer information om våra specialistområden!</h2>
            <!-- Knappar -->
            <button class="cta-button" id="buttonansikte">Ansikte</button>
            <button class="cta-button" id="buttonhals">Hals</button>
            <button class="cta-button" id="buttonmun">Mun</button>
            <button class="cta-button" id="buttonhänder">Händer</button>
            <button class="cta-button" id="buttontänder">Tänder</button>
        </div>

        <div class="col">
            <h2>Vänligen fyll i ditt telefonummer nedan för att bli kontaktad av oss!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, at? Quos sint ratione esse reiciendis aperiam. Id enim officia perspiciatis iure? Ex iure hic eligendi libero quas molestias architecto unde!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus amet a fugiat voluptatem expedita libero velit quas cum, hic assumenda consequuntur minima ut debitis qui eligendi impedit maiores molestias culpa.</p>
              <!-- Formulär -->
            <form id="phoneform">
                <input type="text" name="formInput" placeholder="Ange ditt telefonummer">
                <input type="submit" value="Skicka">
            </form>
        </div>

    </div>

    <div class="row">

        <div class="col">
            <h2>Mer information!</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error assumenda vel maxime eveniet in perspiciatis et reprehenderit pariatur minima ullam fuga, maiores aperiam provident quibusdam consequatur reiciendis suscipit eum! Eius.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maxime molestiae vitae mollitia fugit deserunt iste at numquam quibusdam, eius, consequatur enim nobis nesciunt illum hic praesentium qui assumenda officiis?</p>
        </div>

    </div>

    <h3>Tryck på nedan länkar för mer information!</h3>
            <!-- Länkar -->
            <a href="#" id="link1">Länk 1</a>
            <a href="#" id="link2">Länk 2</a>

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
    <p> Copyright © Ottilia Pettersson. We use cookies - read more<a href="/cookiepolicy"> here.</a></p>
    </footer>
</body>
</html>