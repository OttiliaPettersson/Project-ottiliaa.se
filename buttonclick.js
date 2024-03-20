// Global variabel för att lagra klickdata
let clickData = {};

// Funktion för att spåra händelser i Google Tag Manager
function trackEvent(eventName, eventData = {}) {
  window.dataLayer = window.dataLayer || [];
  window.dataLayer.push({
    'event': eventName,
    ...eventData
  });
}

// Funktion för att spara klickhändelse och skicka till Google Tag Manager
function saveClickEvent(elementId) {
  clickData = localStorage.getItem('clickData') ? JSON.parse(localStorage.getItem('clickData')) : {};

  if (!clickData[elementId]) {
    clickData[elementId] = 1;
  } else {
    clickData[elementId]++;
  }

  localStorage.setItem('clickData', JSON.stringify(clickData));
  logClickData();
  trackEvent('button_click', { 'elementId': elementId });
}

// Eventlyssnare för knappar
document.getElementById('buttonansikte').addEventListener('click', function() {
  saveClickEvent('buttonansikte');
  // Anropa andra funktioner eller utför andra åtgärder vid knapptryckning här
});

document.getElementById('buttonhals').addEventListener('click', function() {
  saveClickEvent('buttonhals');
  // Anropa andra funktioner eller utför andra åtgärder vid knapptryckning här
});

document.getElementById('buttonmun').addEventListener('click', function() {
  saveClickEvent('buttonmun');
  // Anropa andra funktioner eller utför andra åtgärder vid knapptryckning här
});

document.getElementById('buttonhänder').addEventListener('click', function() {
  saveClickEvent('buttonhänder');
  // Anropa andra funktioner eller utför andra åtgärder vid knapptryckning här
});

document.getElementById('buttontänder').addEventListener('click', function() {
  saveClickEvent('buttontänder');
  // Anropa andra funktioner eller utför andra åtgärder vid knapptryckning här
});

// Funktion för att logga klickdata i konsolen
function logClickData() {
  console.log('Klickdata:', clickData);
}

// Exempel på att logga klickdata när sidan laddas
window.onload = function() {
  logClickData();
};

