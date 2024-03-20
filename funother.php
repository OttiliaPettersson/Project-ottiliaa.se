<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fun/Other</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include("gtm.head.php"); ?>
  
</head>
<body>
    <?php include("gtm.body.php"); ?>

    <?php include("header2.php"); ?>

    <h2 class="section-title">Funny things!</h2>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.mySlides {display: none}
img {vertical-align: middle;}
 
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  margin-top: 30px;
}
 
/* The images */
.mySlides img {
  max-width: 50%;
  height: auto;
}
 
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: 5%;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  background-color: rgba(0,0,0,0.8);
}
 
/* Position the "previous button" to the left */
.prev {
  left: 0;
  border-radius: 3px 0 0 3px;
}
 
/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 0 3px 3px 0;
}
 
/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}
 
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dots{
  margin-top: 50px;
  margin-bottom: 50px;
  text-align: center;
}
 
/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.dot.active{
  background-color: #f00;
}
/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  text-align: center;
}
 
/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}
 
@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
 
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next, .text {font-size: 11px}
}
</style>
<div class="slideshow-container">
 
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="/bilder/bebis.jpeg" style="width:100%">
    <div class="text">Jag vet ännu inte varför min kod inte fungerar...</div>
  </div>
 
  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="/bilder/mbild2.jpeg" style="width:100%">
    <div class="text">Så alla ser mig...</div>
  </div>
 
  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="/bilder/mbild3.png" style="width:100%">
    <div class="text">Skulle aldrig hända mig...</div>
  </div>
 
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
 
</div>
<br>
 
<div class="dots">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);
 
function plusSlides(n) {
  showSlides(slideIndex += n);
}
 
function currentSlide(n) {
  showSlides(slideIndex = n);
}
 
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<button onclick="ändraOchSparaFärg()">Click here for a new background color!</button>
 
<script>
    // Hämta senast sparade bakgrundsfärg från cookien
    var senastValdFärg = getCookie("senastValdFärg");
 
    // Om det finns en sparad färg, tillämpa den
    if (senastValdFärg) {
        document.body.style.backgroundColor = senastValdFärg;
    }

    function ändraOchSparaFärg() {
        var bodyElement = document.body;
 
        // Alternera mellan rgb(200, 350, 280) och svart bakgrundsfärg
        var nyFärg = bodyElement.style.backgroundColor === "pink" ? "rgb(200, 350, 280)" : "pink";
        bodyElement.style.backgroundColor = nyFärg;
 
        // Spara den senast valda färgen i cookien
        setCookie("senastValdFärg", nyFärg, 365);
    }
 
    // Funktion för att hämta värdet av en cookie
    function getCookie(namn) {
        var namnEQ = namn + "=";
        var kakor = document.cookie.split(';');
        for (var i = 0; i < kakor.length; i++) {
            var kaka = kakor[i];
            while (kaka.charAt(0) == ' ') kaka = kaka.substring(1, kaka.length);
            if (kaka.indexOf(namnEQ) == 0) return kaka.substring(namnEQ.length, kaka.length);
        }
        return null;
    }
 
    // Funktion för att sätta värdet av en cookie
    function setCookie(namn, värde, dagar) {
        var nu = new Date();
        nu.setTime(nu.getTime() + (dagar * 24 * 60 * 60 * 1000));
        var utgångsdatum = "utgångsdatum=" + nu.toUTCString();
        document.cookie = namn + "=" + värde + "; " + utgångsdatum + "; path=/";
    }
</script>

<button onclick="skrivUtRoligt()">Click here for a joke in the console!</button>
 
<script>
    function skrivUtRoligt() {
        console.log("Vilka djur i djungeln går sämst?...Går-illa");
    }
</script>

  <div class="say_my_name_wrapper">
    <div class="say_my_name_inner">
      <h2>Enter your name below to say hello!</h2>
      <input id="userName" type="text" placeholder="Write your name here">
      <button id="helloButton">Say hello!</button>
    </div>
  </div>

            <script>
        // Sätt användarens namn i cookie när hen klickar på knappen
        document.getElementById("helloButton").addEventListener('click', function() {
        const userName = document.getElementById("userName").value;
        if (userName !== "") {
            setCookie("userName", userName, 365); // Sparar användarens namn i 365 dagar
            alert("Hello, " + userName + "!");
        } else {
            alert("Write your name first!");
        }
        });
 
        // Funktion för att sätta en cookie
        function setCookie(cookieName, cookieValue, expirationDays) {
        const d = new Date();
        d.setTime(d.getTime() + (expirationDays * 24 * 60 * 60 * 1000));
        const expires = "expires=" + d.toUTCString();
        document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
        }
 
        // Återställ användarens namn när sidan laddas
        window.onload = function() {
        const userNameFromCookie = getCookie("userName");
        if (userNameFromCookie) {
            document.getElementById("userName").value = userNameFromCookie;
        }
        };
 
        // Funktion för att hämta värdet från en cookie
        function getCookie(cookieName) {
        const name = cookieName + "=";
        const decodedCookie = decodeURIComponent(document.cookie);
        const cookieArray = decodedCookie.split(';');
 
        for (let i = 0; i < cookieArray.length; i++) {
            let cookie = cookieArray[i];
            while (cookie.charAt(0) === ' ') {
            cookie = cookie.substring(1);
            }
            if (cookie.indexOf(name) === 0) {
            return cookie.substring(name.length, cookie.length);
            }
        }
        return "";
        }
 
    </script>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Textstorlek</title>
 
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Hämta aktuell textstorlek från localStorage eller använd standardstorlek om inte finns
            let currentFontSize = localStorage.getItem("fontSize") || 16;
            
            // Sätt textstorleken på sidan
            document.body.style.fontSize = currentFontSize + "px";
 
            // Lyssna på klick för att förstora texten
            document.getElementById("increaseFont").addEventListener("click", function() {
                currentFontSize++;
                updateFontSize();
            });
 
            // Lyssna på klick för att förminska texten
            document.getElementById("decreaseFont").addEventListener("click", function() {
                currentFontSize--;
                updateFontSize();
            });
 
            // Funktion för att uppdatera textstorleken och spara inställningen till localStorage
            function updateFontSize() {
                document.body.style.fontSize = currentFontSize + "px";
                localStorage.setItem("fontSize", currentFontSize);
            }
        });
    </script>

<div class="content">
        <p id="textToResize">Try the button below for larger or smaller text!</p>
        <button id="increaseFont">Larger text</button>
        <button id="decreaseFont">Smaller text</button>
    </div>
 
    <script src="script.js"></script>

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