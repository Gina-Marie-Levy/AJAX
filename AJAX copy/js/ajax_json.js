// JavaScript Document

(function() {
  var httpRequest;
  document.getElementById("ajaxButton").onclick = function() { makeRequest('data/conditions.txt'); };

  function makeRequest(url) {
    if (window.XMLHttpRequest) { // Mozilla, Safari, ...
      httpRequest = new XMLHttpRequest();
    } else if (window.ActiveXObject) { // IE
      try {
        httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
      } 
      catch (e) {
        try {
          httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
        } 
        catch (e) {}
      }
    }

    if (!httpRequest) {
      alert('Giving up :( Cannot create an XMLHTTP instance');
      return false;
    }
    httpRequest.onreadystatechange = alertContents;
    httpRequest.open('GET', url);
    httpRequest.send();
  }

  function alertContents() {
    if (httpRequest.readyState === 4) {
      if (httpRequest.status === 200) {
    		var JSONObject = JSON.parse(httpRequest.responseText);
		    document.getElementById("scope").innerHTML = "Your Horoscope is: " + JSONObject.Aries ;
        else {
          document.getElementById("scope").innerHTML = "Your Horoscope is: " + JSONObject.Taurus ;
          document.getElementById("scope").innerHTML = "Your Horoscope is: " + JSONObject.Gemini ;
          document.getElementById("scope").innerHTML = "Your Horoscope is: " + JSONObject.Cancer ;
          document.getElementById("scope").innerHTML = "Your Horoscope is: " + JSONObject.Leo ;
          document.getElementById("scope").innerHTML = "Your Horoscope is: " + JSONObject.Virgo ;
          document.getElementById("scope").innerHTML = "Your Horoscope is: " + JSONObject.Libra ;
          document.getElementById("scope").innerHTML = "Your Horoscope is: " + JSONObject.Scorpio ;
          document.getElementById("scope").innerHTML = "Your Horoscope is: " + JSONObject.Sagittarius ;
          document.getElementById("scope").innerHTML = "Your Horoscope is: " + JSONObject.Capricorn ;
          document.getElementById("scope").innerHTML = "Your Horoscope is: " + JSONObject.Aquarius ;
          document.getElementById("scope").innerHTML = "Your Horoscope is: " + JSONObject.Pisces ;


        }


        /*+ JSONObject.Taurus, + JSONObject.Gemini, + JSONObject.Cancer, + JSONObject.Leo,
        + JSONObject.Virgo, + JSONObject.Libra, + JSONObject.Scorpio, + JSONObject.Sagittarius, + JSONObject.Capricorn, + JSONObject.Aquarius, + JSONObject.Pisces  ;*/
      } 
      else {
        alert('There was a problem with the request.');
      }
    }
  }

})();