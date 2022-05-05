
<!DOCTYPE html>
<html lang="pt-br">

<head>
   <!-- <link rel="stylesheet" href="Css/bootstrap.min.css">
<script scr="Scripts/bootstrap.bundle.min.js"></script> -->
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
   <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
<?php
include 'menu.php';
?>

   <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators ">
         <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
         <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
         <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
         <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
      </div>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div id="imagemCarrossel_1" class="d--100"></div>
         </div>
         <div class="carousel-item">
            <div id="imagemCarrossel_2" class="d--100"></div>
         </div>
         <div class="carousel-item">
            <div id="imagemCarrossel_3" class="d--100"></div>
         </div>
         <div class="carousel-item">
            <div id="imagemCarrossel_4" class="d--100"></div>
         </div>
         <div class="carousel-item">
            <div id="imagemCarrossel_5" class="d--100"></div>
         </div>
         <div class="carousel-item">
            <div id="imagemCarrossel_6" class="d--100"></div>
         </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
   </div>
</body>

</html>