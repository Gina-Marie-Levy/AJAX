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
		    document.getElementById("news").innerHTML = "Todays Hot Topic: " + JSONObject.Knights;
      }
      else {
        alert('There was a problem with the request.');
      }
    }
  }

  function displayLoading(element) {
  while (element.hasChildNodes()) {
    element.removeChild(element.lastChild);
  }
  var image = document.createElement("img");
  image.setAttribute("src","loading.gif");
  image.setAttribute("alt","Loading...");
  element.appendChild(image);
}

})();