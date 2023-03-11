<!DOCTYPE html>
<head>
    <title>Prime Properties</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="prime.css" rel="stylesheet" type="text/css"/>
    <link href="detail.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="image/OMNES.ico">
    <script src="https://kit.fontawesome.com/92cddb0a79.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="wrapper">
        <?php
        include("scripts/header.php");
         ?>

        <?php
        include("scripts/deroulant.php");
        ?>

        <div class="container">

          <div class="mySlides">
              <img src="image/semaine1.png" style="width:100%">
          </div>

          <div class="mySlides">
              <img src="image/semaine2.png" style="width:100%">
          </div>

          <divc class="mySlides">
              <img src="image/semaine3.png" style="width:100%">
          </div>

          <div class="mySlides">
              <img src="image/semaine4.png" style="width:100%">
          </div>

          <div class="mySlides">
              <img src="image/semaine5.png" style="width:100%">
          </div>

          <div class="mySlides">
              <img src="image/semaine6.png" style="width:100%">
          </div>

          <div class="row">
            <div class="column">
              <img class="demo cursor" src="image/semaine1.png" style="width:100%" onclick="currentSlide(1)">
            </div>
            <div class="column">
              <img class="demo cursor" src="image/semaine2.png" style="width:100%" onclick="currentSlide(2)">
            </div>
            <div class="column">
              <img class="demo cursor" src="image/semaine3.png" style="width:100%" onclick="currentSlide(3)">
            </div>
            <div class="column">
              <img class="demo cursor" src="image/semaine4.png" style="width:100%" onclick="currentSlide(4)">
            </div>
            <div class="column">
              <img class="demo cursor" src="image/semaine5.png" style="width:100%" onclick="currentSlide(5)">
            </div>
            <div class="column">
              <img class="demo cursor" src="image/semaine6.png" style="width:100%" onclick="currentSlide(6)">
            </div>
          </div>
          <div class="descr">

            <h3 align="center">Numéro d'identification : <strong>Apartement 387</strong></h3>
            <p>Description du bien :</p>
            <p><span STYLE="padding:0 0 0 40px;">Nombre de pièces : <strong>4 pièces ° 3 chambres ° 76m² ° Etage 4/6 avec ascenseur</strong></p>
            <p><span STYLE="padding:0 0 0 40px;">Adresse : <strong>47 rue Gambetta 93100 Montreuil</strong></p>
            <p><span STYLE="padding:0 0 0 40px;">Prix : <strong>647 000 €</strong></p>
            <div class="bouton_resa">
                <button class="bouton_footer" class="btn" id="reserver_btn"><a href="reservation.php">Réserver</a></button>
            </div>  

            <div class="descr">

              <div class="agent">
                <img style="float: left; width: 25%; padding-left:50px;" class="image_info" src="image/photo_Téo">
                <h4 style="float: left; padding-left: 30px;">
                  Téo Penneçot<br>
                  Agent Immobilier agréé<br>
                  Téléphone : +33 7 81 44 42 57<br>
                  Email : teo.pennecot@edu.ece.fr<br>
                  Spécialité : Appartements<br>
                  </h4>
              </div>

                <div>
                    <hr class="trait">
                    <br><br>
                </div>

              <table align="center">
                <thead>
                  <tr>
                    <th colspan="2">Lundi</th>
                    <th colspan="2">Mardi</th>
                    <th colspan="2">Mercredi</th>
                    <th colspan="2">Jeudi</th>
                    <th colspan="2">Vendredi</th>
                    <th colspan="2">Samedi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>AM</td>
                    <td>PM</td>

                    <td>AM</td>
                    <td>PM</td>
                    
                    <td>AM</td>
                    <td>PM</td>
                    
                    <td>AM</td>
                    <td>PM</td>
                    
                    <td>AM</td>
                    <td>PM</td>
                    
                    <td>AM</td>
                    <td>PM</td>
                  </tr>
                  <tr>
                    <td>
                      <input type="button" value="" style="width:30px;">
                    </td>
                    <td>
                      <input type="button" value="" style="width:30px;background-color: black;">
                    </td>
                    <td>
                      <input type="button" value="" style="width:30px;">
                    </td>
                    <td>
                      <input type="button" value="" style="width:30px;">
                    </td>
                    <td>
                      <input type="button" value="" style="width:30px;background-color: black;">
                    </td>
                    <td>
                      <input type="button" value="" style="width:30px;">
                    </td>
                    <td>
                      <input type="button" value="" style="width:30px;">
                    </td>
                    <td>
                      <input type="button" value="" style="width:30px;">
                    </td>
                    <td>
                      <input type="button" value="" style="width:30px;">
                    </td>
                    <td>
                      <input type="button" value="" style="width:30px;">
                    </td>
                    <td>
                      <input type="button" value="" style="width:30px; background-color: black;">
                    </td>
                    <td>
                      <input type="button" value="" style="width: 30px; background-color: black;">
                    </td>

                  </tr>
                </tbody>
              </table>

              <div>
                  <hr class="trait">
                  <br><br>
              </div>


              <div class="bouton_resa">
                  <button class="bouton_footer" class="btn" id="reserver_btn"><a href="reservation.php">Prendre rendez-vous</a></button>
                  <button class="bouton_footer" class="btn" id="reserver_btn"><a href="reservation.php">Voir le CV</a></button>
              </div>  
            </div>

        </div>





        </div>
        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
              showSlides(slideIndex += n);
            }

            function currentSlide(n) {
              showSlides(slideIndex = n);
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("demo");
                let captionText = document.getElementById("caption");
                if (n > slides.length) 
                {
                    slideIndex = 1
                }
                if (n < 1) 
                {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) 
                {
                  slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
                captionText.innerHTML = dots[slideIndex-1].alt;
            }
        </script>

        

        <?php
            include("scripts/footer.php");
        ?>
    </div>
</body>
</html>