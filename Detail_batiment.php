<!DOCTYPE html>

<head>
  <title>Prime Properties</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="prime.css" rel="stylesheet" type="text/css" />
  <link href="detail.css" rel="stylesheet" type="text/css" />
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

    <?php
    include("scripts/affichage_detail_bat.php");
    ?>



    <!--<div class="descr">

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
      <?php
        include("testcalendrier.php");
      ?>
          

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
                <input type="button" id="bouton1-change-color" onclick="changeColor1()" value="" style="width:30px;">
              </td>
              <td>
                <input type="button" id="bouton2-change-color" onclick="changeColor2()" value="" style="width:30px;background-color: black;">
              </td>
              <td>
                <input type="button" id="bouton3-change-color" onclick="changeColor3()" value="" style="width:30px;">
              </td>
              <td>
                <input type="button" id="bouton4-change-color" onclick="changeColor4()" value="" style="width:30px;">
              </td>
              <td>
                <input type="button" id="bouton5-change-color" onclick="changeColor5()" value="" style="width:30px;background-color: black;">
              </td>
              <td>
                <input type="button" id="bouton6-change-color" onclick="changeColor6()" value="" style="width:30px;">
              </td>
              <td>
                <input type="button" id="bouton7-change-color" onclick="changeColor7()" value="" style="width:30px;">
              </td>
              <td>
                <input type="button" id="bouton8-change-color" onclick="changeColor8()" value="" style="width:30px;">
              </td>
              <td>
                <input type="button" id="bouton9-change-color" onclick="changeColor9()" value="" style="width:30px;">
              </td>
              <td>
                <input type="button" id="bouton10-change-color" onclick="changeColor10()" value="" style="width:30px;">
              </td>
              <td>
                <input type="button" id="bouton11-change-color" onclick="changeColor11()" value="" style="width:30px; background-color: black;">
              </td>
              <td>
                <input type="button" id="bouton12-change-color" onclick="changeColor12()" value="" style="width: 30px; background-color: black;">
              </td>
            </tr>
          </tbody>
        </table>

      <div>
        <hr class="trait">
        <br><br>
      </div>


      <div class="bouton_resa">
        <button class="bouton_footer" class="btn" id="reserver_btn"><a href="CV.php">Voir le CV</a></button>
      </div>
    </div>

    <script type="text/javascript">

      function changeColor1() {
        var bouton1 = document.getElementById("bouton1-change-color");
        bouton1.classList.add("bouton1-change-color-clique");
        alert("Votre rendez-vous a bien été pris !");
      }
      function changeColor2() {
        var bouton2 = document.getElementById("bouton2-change-color");
        bouton2.classList.add("bouton2-change-color-clique");
        alert("Votre rendez-vous a bien été pris !");
      }
      function changeColor3() {
        var bouton3 = document.getElementById("bouton3-change-color");
        bouton3.classList.add("bouton3-change-color-clique");
        alert("Votre rendez-vous a bien été pris !");
      }

      function changeColor4() {
        var bouton4 = document.getElementById("bouton4-change-color");
        bouton4.classList.add("bouton4-change-color-clique");
        alert("Votre rendez-vous a bien été pris !");
      }

      function changeColor5() {
        var bouton5 = document.getElementById("bouton5-change-color");
        bouton5.classList.add("bouton5-change-color-clique");
        alert("Votre rendez-vous a bien été pris !");
      }

      function changeColor6() {
        var bouton6 = document.getElementById("bouton6-change-color");
        bouton6.classList.add("bouton6-change-color-clique");
        alert("Votre rendez-vous a bien été pris !");
      }

      function changeColor7() {
        var bouton8 = document.getElementById("bouton8-change-color");
        bouton8.classList.add("bouton8-change-color-clique");
        alert("Votre rendez-vous a bien été pris !");
      }
      function changeColor8() {
        var bouton9 = document.getElementById("bouton9-change-color");
        bouton9.classList.add("bouton9-change-color-clique");
        alert("Votre rendez-vous a bien été pris !");
      }
      function changeColor9() {
        var bouton10 = document.getElementById("bouton10-change-color");
        bouton10.classList.add("bouton10-change-color-clique");
        alert("Votre rendez-vous a bien été pris !");
      }
      function changeColor10() {
        var bouton11 = document.getElementById("bouton11-change-color");
        bouton11.classList.add("bouton11-change-color-clique");
        alert("Votre rendez-vous a bien été pris !");
      }

      function changeColor11() {
        var bouton12 = document.getElementById("bouton12-change-color");
        bouton12.classList.add("bouton12-change-color-clique");
        alert("Votre rendez-vous a bien été pris !");
      }
      function changeColor12() {
        var bouton7 = document.getElementById("bouton7-change-color");
        bouton7.classList.add("bouton7-change-color-clique");
        alert("Votre rendez-vous a bien été pris !");
      }
    </script>-->


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
        if (n > slides.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
      }
    </script>



    <?php
    include("scripts/footer.php");
    ?>
  </div>
</body>

</html>