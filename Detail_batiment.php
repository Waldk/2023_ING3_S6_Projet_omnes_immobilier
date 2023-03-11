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