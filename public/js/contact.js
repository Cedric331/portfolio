
 document.getElementById('message').innerHTML = "Merci votre message à été envoyée";
 
// On l'efface 8 secondes plus tard
setTimeout(function() {
  document.getElementById('message').innerHTML = "";
},8000);