<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VG</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include("gtm.head.php"); ?>
</head>
<body>
    <?php include("gtm.body.php"); ?>

    <?php include("header2.php"); ?>

    <main class="main_content">

    <div class="row">

        <div class="col">
        <h2>Lösta G-uppgifter:</h2>
            <p>Det ska finnas en webbplats</p>
            <p>URL ska vara inskriven</p>
            <p>GTM installerat på webbplatsen.</p>
            <p>Ha https som adress och fungerande SSL</p>
            <p>Webbplatsens GTM ska ha en fungerande GA som samlar in GA-data. Detta ska ske på webbplatsens alla undersidor.</p>
            <p>Ska ha: (Alla listade sidor nedan ska finnas i menyn. Ni får även ha ytterligare sidor.)</p>
            <p>Startsida</p>
            <p>Inläggssida (tex, nyheter/blogg) med minst tre inlägg.</p>
            <p>Om sida - där ni fyller på med innehåll om er eller fiktivt innehåll. Minst två bilder två textblock förväntas.</p>
            <p>CV sida</p>
            <p>Meme sida med egna kommentarer om dessa. Minst tre stycken. </p>
            <p>Kontaktsida</p>
            <p>Innehåll på undersidor ska minst ha en bild och minst två paragrafer text. Unik innehåll på varje sida.</p>
            <p>En global meny, dvs en huvudmeny där alla undersidor går nå från alla respektive sidor.</p>
            <p>Sida för Integritetspolicy/Cookie information</p>
        </div>

        <div class="col">
            <h2>Lösta VG-uppgifter</h2>
            <p>1. Göra en snyggare länkstruktur via htaccess så att länkarna ser ut så här din.domän/om-mig istället för din.domän/om-mig.php eller din.domän/?sida=om-mig</p>
            <p>2. Bygga en egen footer som följer med på alla sidor.</p>
            <p>3. Kontaktsidan ska ha ett fungerande e-post formulär.</p>
            <p>4. En knapp som skriver ut något roligt i konsolen via JavaScript.</p>
            <p>5. Ett formulär där sidan frågar vem du är, när du trycker på tillhörande knapp ska sidan via en JavaScript alert säga “Hej *namn*”</p>
            <p>6. Namnet ska sparas i en cookie och när du kommer in på sidan igen ska namnet stå kvar i formuläret.</p>
            <p>7. En knapp som byter bakgrundsfärg på sajten.</p>
            <p>8. När bakgrundsfärgen är bytt ska detta sparas i en cookie och för besökaren då alltid vara denna färg tills hen väljer att byta tillbaka via samma knapp.</p>
            <p>9. En knapp som förstorar/förminskar textstorleken på sajten och sparar inställningen till localStorage.</p>
            <p>10. Nästa gång besökaren kommer till sidan så laddas inställningen för textstorleken in igen via localStorage.</p>
            <p>11. Via CSS när du för muspekaren över formulärfält så ska dessa markeras tydligt.</p>
            <p>12. Bygg en egen cookie consent popup. Den behöver inte blockera några cookies, bara vara en popup som visas på alla sidor tills besökaren godkänt.</p>
            <p>13. (2 p) Bygga en fungerande inloggning på er egna sida, skriv vilka inloggningsuppgifter jag ska använda bredvid så jag kommer in. Efter inloggning tas jag till en sida vars innehåll endast går se som inloggad.</p>
            <p>14. Lägg in hemligt innehåll på startsidan som jag endast kan se som inloggad.</p>
            <p>15. Metabeskrivningar och korrekt titel på varje sida.</p>
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
    <p> Copyright © Ottilia Pettersson. We use cookies - read more<a href="/cookiepolicy"> here.</a></p>
    </footer>
</body>
</html>