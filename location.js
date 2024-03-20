// För att avgöra användarens plats (land):
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    console.log("Geolocation is not supported by this browser.");
  }
  
  function showPosition(position) {
    console.log("Latitude: " + position.coords.latitude +
      " Longitude: " + position.coords.longitude);
    
    // Anropa ett API som GeoIP för att få användarens plats från latitude och longitude
    // Visa sedan flaggan för det landet på sidan
    
    // Skicka händelse till Google Tag Manager när platsen är hämtad
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
      'event': 'user_location_detected',
      'latitude': position.coords.latitude,
      'longitude': position.coords.longitude
    });
  }
  
  // För att avgöra användarens språk:
  var userLanguage = navigator.language || navigator.userLanguage;
  console.log("User Language: " + userLanguage);
  
  // Baserat på användarens språk, visa den relevanta flaggan eller språksymbolen på sidan
  // Skicka händelse till Google Tag Manager för användarens språk
  window.dataLayer = window.dataLayer || [];
  window.dataLayer.push({
    'event': 'user_language_detected',
    'user_language': userLanguage
  });
  
  // För att visa användarens lokala tid:
  var now = new Date();
  var localTime = now.toLocaleTimeString();
  console.log("Local Time: " + localTime);
  
  // Visa den lokala tiden på sidan där det är relevant för användaren
  // Skicka händelse till Google Tag Manager för användarens lokala tid
  window.dataLayer = window.dataLayer || [];
  window.dataLayer.push({
    'event': 'local_time_detected',
    'local_time': localTime
  });
  
  function showFlag() {
    var userLanguage = navigator.language || navigator.userLanguage;
    var flagContainer = document.getElementById("flagContainer");
    
    // Skapa en karta mellan språkkoder och flaggklasser
    var flags = {
      "en": "flag-icon-gb", // Ersätt med de faktiska klassnamnen för flaggorna
      "sv": "flag-icon-se",
      // Lägg till fler språkkoder och flaggklasser här
    };
  
    var flagClass = flags[userLanguage];
    if (flagClass) {
      flagContainer.innerHTML = ""; // Rensa tidigare flagga (om någon)
      flagContainer.classList.add(flagClass);
    } else {
      flagContainer.innerHTML = "Ingen flagga tillgänglig för detta språk";
    }
  }
  
  // Kör funktionen för att visa flagga när sidan laddas
  window.onload = function() {
    showFlag();
  };
  
  