<?php include "./Partiels/Header.html";?>
<body>
  <div class="top_container sub_pages">
    <!-- header section strats -->
    <?php include "./Partiels/NavBar.html";?>
  </div>
  <!-- end header section -->
  
  <section class="about_section layout_padding">
    <div class="container">
      <h2 class="main-heading ">
      Comment dessiner un triangle ?
      </h2>
      <p class="text-center">
      Pour dessiner un triangle, vous devez identifier trois points sur le repére orthonormé et les relier les uns aux autres.
    </p>
      <div class="about_img-box ">
        <img src="images/kids.jpg" alt="" class="img-fluid w-100">
      </div>
      <div class="d-flex justify-content-center mt-5">
     <?php include("./Partiels/Modal.php")?>
      </div>
  </section>
</div>
  </section>

<!-- Drawing section -->

  <!-- footer section -->
  <?php include "./Partiels/Footer.html";?>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- progreesbar script -->

  <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>

</html>