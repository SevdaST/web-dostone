function traverten()
      {
        allvisiblefalse();
        document.getElementById("urun1").style.display="block";
        document.getElementById("card1title").innerHTML = "Cross Cut Traverten";
        document.getElementById("card1img").src = "images/traverten/crosscut.jpg";
        document.getElementById("urun2").style.display="block";
        document.getElementById("card2title").innerHTML = "Vein Cut Traverten";
        document.getElementById("card2img").src = "images/traverten/veincut.jpg";
        
   

        // const fs = require('fs')
        // const length = fs.readdirSync('/images/traverten').length
      }
      function onyx()
      {
       allvisiblefalse();
        document.getElementById("urun1").style.display = "block";
        document.getElementById("card1title").innerHTML = "Onyx Mermer";
        document.getElementById("card1img").src = "images/onyx/onyx1.jpg";

        document.getElementById("urun2").style.display = "block";
        document.getElementById("card2title").innerHTML = "Onyx Mermer";
        document.getElementById("card2img").src = "images/onyx/onyx2.jpg";

      }
      function granit()
      {
        allvisiblefalse();
        document.getElementById("urun1").style.display="block";
        document.getElementById("card1title").innerHTML = "Ash Black";
        document.getElementById("card1img").src = "images/granit/ashblack.jpg";

        document.getElementById("urun2").style.display="block";
        document.getElementById("card2title").innerHTML = "Black Pearl";
        document.getElementById("card2img").src = "images/granit/blackpearl.jpg";

        document.getElementById("urun3").style.display="block";
        document.getElementById("card3title").innerHTML = "Blue Pearl";
        document.getElementById("card3img").src = "images/granit/bluepearl.jpg";
       
        document.getElementById("urun4").style.display="block";
        document.getElementById("card4title").innerHTML = "Bianco Halleyep";
        document.getElementById("card4img").src = "images/granit/biancohalleyep.jpg";

        document.getElementById("urun5").style.display="block";
        document.getElementById("card5title").innerHTML = "Kristal Blue";
        document.getElementById("card5img").src = "images/granit/kristalblue.jpg";

        document.getElementById("urun6").style.display="block";
        document.getElementById("card6title").innerHTML = "Chima Pink";
        document.getElementById("card6img").src = "images/granit/chimapink.jpg";
      
        document.getElementById("urun7").style.display="block";
        document.getElementById("card7title").innerHTML = "New Imperial Red";
        document.getElementById("card7img").src = "images/granit/newimperialred.jpg";

        document.getElementById("urun8").style.display="block";
        document.getElementById("card8title").innerHTML = "Porino";
        document.getElementById("card8img").src = "images/granit/porino.jpg";

        document.getElementById("urun9").style.display="block";
        document.getElementById("card9title").innerHTML = "Star Galaxy";
        document.getElementById("card9img").src = "images/granit/stargalaxy.jpg";

        document.getElementById("urun10").style.display="block";
        document.getElementById("card10title").innerHTML = "Tanbrown";
        document.getElementById("card10img").src = "images/granit/tanbrown.jpg";

        document.getElementById("urun11").style.display="block";
        document.getElementById("card11title").innerHTML = "Verde Guatemala";
        document.getElementById("card11img").src = "images/granit/verdeguatemala.jpg";

      }

      function allvisiblefalse()
      {
        var urun=[];

        for (var i = 1; i <= 12; i++) {
          urun[i]="urun"+(i);
        }

        for (var i = 1; i <= 12; i++) {
          document.getElementById(urun[i]).style.display = "none";
          ////document.getElementById(urun[i]).style="visibility:hidden";
        } 
      }