// Visa popup-fönstret om cookien inte är inställd
window.onload = function() {
    if (getCookie("cookie_accepted") !== "true") {
        document.getElementById("cookie-popup").style.display = "block";
    }
  };
   
  // Stäng popup-fönstret och ställ in en cookie när användaren accepterar
  function closeCookiePopup() {
    document.getElementById("cookie-popup").style.display = "none";
    setCookie("cookie_accepted", "true", 365);
  }
   
   
  // Funktioner för att ställa in och hämta cookies 
  function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  
  