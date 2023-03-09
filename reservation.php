<!DOCTYPE html>
<head>
    <title>Prime Properties</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="prime.css" rel="stylesheet" type="text/css"/>
    <link href="detail.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="image/OMNES.ico">
    <script src="https://kit.fontawesome.com/92cddb0a79.js" crossorigin="anonymous"></script>
    <link href="calendrier.css" rel="stylesheet" type="text/css"/>
    <script src="calendrier.js" crossorigin="anonymous"></script>


</head>
<body>
    <div id="wrapper">
        <?php
        include("scripts/header.php");
         ?>

        <?php
        include("scripts/deroulant.php");
        ?>


        <h2 align="center">Réservation d'un bien</h2>


        <div class="calendar">
  <div class="calendar__month">
    <div class="cal-month__previous"></div>
    <div class="cal-month__current"></div>
    <div class="cal-month__next"></div>
  </div>
  <div class="calendar__head">
    <div class="cal-head__day"></div>
    <div class="cal-head__day"></div>
    <div class="cal-head__day"></div>
    <div class="cal-head__day"></div>
    <div class="cal-head__day"></div>
    <div class="cal-head__day"></div>
    <div class="cal-head__day"></div>
  </div>
  <div class="calendar__body">
    <div class="cal-body__week">
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
    </div>
    <div class="cal-body__week">
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
    </div>
    <div class="cal-body__week">
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
    </div>
    <div class="cal-body__week">
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
    </div>
    <div class="cal-body__week">
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
    </div>
    <div class="cal-body__week">
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
    </div>
  </div>
</div>



        <?php
            include("scripts/footer.php");
        ?>
    </div>
</body>
</html>