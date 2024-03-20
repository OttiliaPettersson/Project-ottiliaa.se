<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog post 1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include("gtm.head.php"); ?>
</head>
<body>
    <?php include("gtm.body.php"); ?>

    <?php include("header2.php"); ?>
    
    <main class="main_content">

    <div class="row">

        <div class="col">
            <h2>The Joy of Christmas Traditions</h2>
            <p>The holiday season heralds a tapestry of cherished traditions that warmly embrace our hearts and homes. Each tradition holds a unique significance, weaving a narrative of joy, nostalgia, and togetherness. One such hallmark tradition is adorning our homes with twinkling lights and festive décor. Whether it's the sparkle of fairy lights on a tree or the gleam of ornaments adorning mantelpieces, these decorations infuse our surroundings with an enchanting ambiance. Another cherished ritual is the time-honored tradition of baking. The aroma of gingerbread, sugar cookies, and spiced cakes wafting through the kitchen evokes memories of holidays past and sparks joy in the present. Families gather to roll out dough, decorate cookies, and indulge in the sweet rewards of their labor. The joy of singing carols resonates deeply during this season. Whether it's belting out classics like "Jingle Bells" or singing hymns in church, the melodies carry the spirit of Christmas. These songs connect generations, stirring feelings of warmth and unity.</p>
            <p>However, the pinnacle of these traditions lies in the exchange of gifts. The act of giving symbolizes love, thoughtfulness, and appreciation for our dear ones. It's a gesture that transcends material possessions, conveying heartfelt sentiments and forging connections. The joyous excitement of unwrapping presents and the gleeful expressions on loved ones' faces illuminate the true spirit of the season.</p>
            <p>In essence, Christmas traditions form the cornerstone of the holiday, uniting families, sparking joy, and creating enduring memories that last a lifetime.</p>
            <div style="display: flex; justify-content: center;">
                <img src="merryc.webp" alt="Christmas in Stockholm" style="max-width: 50%; height: auto;">
            </div>
        </div>
    </div>

    </main>

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