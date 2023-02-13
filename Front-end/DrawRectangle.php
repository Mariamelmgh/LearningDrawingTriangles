<?php include "./Partiels/Header.html";?>

<body>
  <div class="top_container sub_pages">
    <!-- header section strats -->
    <?php include "./Partiels/NavBar.html";?>
  </div>
  <!-- end header section -->

  <section class="vehicle_section layout_padding">
    <div class="container">
      <h2 class="main-heading ">
      Comment dessiner un rectangle ?
      </h2>
      <p class="text-center">
      Pour tracer un rectangle, il faut commencer par connaître ses dimensions : la longueur et la largeur des côtés. Quand on connait les dimensions, on peut tracer un premier côté avec une règle et un crayon. On sait qu’un rectangle a quatre angles droits. À partir du premier côté, on trace ensuite un premier angle droit avec une équerre en la plaçant de manière perpendiculaire au premier côté. Une fois ces deux côtés tracés, il suffit de dessiner les deux côtés restants avec les mêmes dimensions que les deux premiers, et de manière parallèle. 
      </p>
      <div class="layout_padding-top">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="vehicle_img-box ">
                <img src="images/bus.png" alt="" class="img-fluid w-100">
              </div>
            </div>
            <div class="carousel-item">
              <div class="vehicle_img-box ">
                <img src="images/rectangle.png" alt="" class="img-fluid w-100">
              </div>
            </div>
            <div class="carousel-item">
              <div class="vehicle_img-box ">
                <img src="images/regle.png" alt="" class="img-fluid w-100">
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="d-flex justify-content-center mt-5">
     
          <?php include("./Partiels/Modal.php")?>
      
      </div>
    </div>
  </section>
  <!-- Drawing section -->

  <!-- footer section -->
  <?php include "./Partiels/Footer.html";?>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- progreesbar script -->

  

</body>

</html>