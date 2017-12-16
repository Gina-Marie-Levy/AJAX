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
		    document.getElementById("scope").innerHTML = "Your Horoscope is: " + JSONObject.Aries ;/*+ JSONObject.Taurus, + JSONObject.Gemini, + JSONObject.Cancer, + JSONObject.Leo,
        + JSONObject.Virgo, + JSONObject.Libra, + JSONObject.Scorpio, + JSONObject.Sagittarius, + JSONObject.Capricorn, + JSONObject.Aquarius, + JSONObject.Pisces  ;*/
      } 
      else {
        alert('There was a problem with the request.');
      }
    }
  }

})();