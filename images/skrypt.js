function zegarek(){
var dzisiaj = new Date();

var dzien = dzisiaj.getDate();
var miesiac = dzisiaj.getMonth()+1;
var rok = dzisiaj.getFullYear();

var godzina = dzisiaj.getHours();
if (godzina<10) godzina = "0"+godzina;

var minuta = dzisiaj.getMinutes();
if (minuta<10) minuta = "0"+minuta;

var sekunda = dzisiaj.getSeconds();
if (sekunda<10) sekunda = "0"+sekunda;

document.getElementById("zegar").innerHTML = 
 dzien+"/"+miesiac+"/"+rok+" | "+godzina+":"+minuta+":"+sekunda;
 
 setTimeout("zegarek()",1000);
}

function myFunction() {
    if(document.getElementById("hide_or_not").style.display == "none")
    {
        document.getElementById("hide_or_not").style.display = "block";
    }else
    {
        document.getElementById("hide_or_not").style.display = "none";   
    }
    
}

function plus() {
       
    document.getElementById("Yggdrasil").style.width= 40 + 'cm';
}
function orgin() {
       
    document.getElementById("Yggdrasil").style.width= 20 + 'cm';
}


function loadDoc1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "grekk.txt", true);
  xhttp.send();
}

function loadDoc2() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "nors.txt", true);
    xhttp.send();
  }
  