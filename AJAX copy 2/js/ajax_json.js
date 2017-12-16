// JavaScript Document

(function() { 
    var n;
    var httpRequest;
    document.usersign.onsubmit=function(event){
        event.preventDefault();
         makeRequest('data/signs.txt');
    };

  function makeRequest(url) {
     if (window.XMLHttpRequest) { // Mozilla, Safari, ...
        httpRequest = new XMLHttpRequest();
      } 
    else if (window.ActiveXObject) { // IE
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
    displayLoading(document.getElementById("horoscope"));
    httpRequest.onreadystatechange = alertContents;
    httpRequest.open('GET', url);
    httpRequest.send();
  }

  function alertContents() {
    if (httpRequest.readyState === 4) {
      if (httpRequest.status === 200 || httpRequest.status== 304) {

          var JSONObject = JSON.parse(httpRequest.responseText);
          signDiv=document.getElementById("horoscope");
         //fortuneDiv.innerHTML = JSONObject.Description;

           t=document.getElementById("number");
          n=t.value;
         
          if(n==0){
            signDiv.innerHTML = JSONObject.Aries;
          }
          else if(n==1){
             signDiv.innerHTML = JSONObject.Taurus;
          }
          else if(n==2){
             signDiv.innerHTML = JSONObject.Gemini;
          }
          else if(n==3){
            signDiv.innerHTML = JSONObject.Cancer;
          }
          else if(n==4){
            signDiv.innerHTML = JSONObject.Leo;
          }
          else if(n==5){
            signDiv.innerHTML = JSONObject.Virgo;
          }
          else if(n==6){
            signDiv.innerHTML = JSONObject.Libra;
          }
          else if(n==7){
            signDiv.innerHTML = JSONObject.Scorpio;
          }
          else if(n==8){
            signDiv.innerHTML = JSONObject.Sagittarius;
          }
          else if(n==9){
            signDiv.innerHTML = JSONObject.Capricorn;
          }
          else if(n==10){
            signDiv.innerHTML = JSONObject.Aquarius;
          }
          else if(n==11){
            signDiv.innerHTML = JSONObject.Pisces;
          }

      else {
        alert('There is a problem with the request');
      }

    }
  }

  function displayLoading(element) {
    while (element.hasChildNodes()) {
      element.removeChild(element.lastChild);
    }
    var image = document.createElement("img");
    image.setAttribute("src","img/loading.gif");
    image.setAttribute("alt","Loading...");
    element.appendChild(image);
  }
  function fadeUp(element,red,green,blue) {
    if (element.fade) {
      clearTimeout(element.fade);
    }
    element.style.backgroundColor = "rgb("+red+","+green+","+blue+")";
    if (red == 255 && green == 255 && blue == 255) {
      return;
    }
    var newred = red + Math.ceil((255 - red)/10);
    var newgreen = green + Math.ceil((255 - green)/10);
    var newblue = blue + Math.ceil((255 - blue)/10);
    var repeat = function() {
      fadeUp(element,newred,newgreen,newblue)
    };
    element.fade = setTimeout(repeat,200);
  }

})();