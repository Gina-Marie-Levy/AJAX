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
    httpRequest.open('GET', 'classes.xml', false);
    httpRequest.send();
    xmlDoc=xmlhttp.responseXML;
  }

  document.write("<table border='1'>");
var x=xmlDoc.getElementsByTagName("class");
for (i=0;i<x.length;i++)
  {
  document.write("<tr><td>");
  document.write(x[i].getElementsByTagName("number")[0].childNodes[0].nodeValue);
  document.write("</td><td>");
  document.write(x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue);
  document.write("</td></tr>");
  }
document.write("</table>");

  function alertContents() {
    if (httpRequest.readyState === 4) {
      if (httpRequest.status === 200) {
    		var JSONObject = JSON.parse(httpRequest.responseText);
		    document.getElementById("web").innerHTML = "Your classes you need are: " + JSONObject.Web ;
      else {
        alert('There was a problem with the request.');
      }
    }
  }

})();