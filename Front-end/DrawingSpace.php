<?php include "./Partiels/Header.html";?>
<?php include "../miniProject.php";?>
<body>
  <div class="top_container sub_pages">
    <!-- header section strats -->
    <?php include "./Partiels/NavBar.html";?>
  </div>
  <div class="d-flex justify-content-center mt-5">
      <!-- Trigger/Open The Modal -->
        <a href="index.php" class="call_to-btn"> Retourner
          <img src="images/right-arrow.png" alt="">
      </a><br>
    </div>
      <?php
        if(isset($_REQUEST["ht"]) && isset($_REQUEST["lt"]) && isset($_REQUEST["px"]) && isset($_REQUEST["py"])){
            echo '<br>
            <div class="contact_section-container">
            <div class="row">
              <div class="col-md-6 mx-auto">
                <div class="contact-form">
            <form method="POST">
            <div>
            
            Donner les valeurs de X et Y d une point pour vérifier si il a appartient à notre rectangle <br>
            <input  type="number" placeholder="X" name="x" id="x"  min="-11" max="11" required>
            <input  type="number" placeholder="Y" name="y" id="y" min="-11" max="11" required>
          </div>
         
          <div class="d-flex justify-content-center">
            <button type=="submit"class="btn_on-hover">
              Vérifier
            </button>
           </form>
            </div>
          </div>
          </div>
          </div>
          </div>
          </div>
  
            ';
          
         
          
         $rectangle  = new Rectangle(new Point($_REQUEST["px"],$_REQUEST["py"]),$_REQUEST["lt"],$_REQUEST["lt"]);
         if(isset($_POST["x"]) && isset($_POST["y"])){
         if($rectangle->interieur1(new Point($_POST["x"],$_POST["y"]))){
          echo "<div class='d-flex justify-content-center mt-5 '>Le point(".$_POST["x"].",".$_POST["y"].") appartient à la rectangle </div>";

         }
         else{
          echo "<div class='d-flex justify-content-center mt-5 '>Le point(".$_POST["x"].",".$_POST["y"].") n'appartient pas à la rectangle </div>";

         }
        }
      }
      ?>  

  
  <?php include "./Partiels/graph.php";?>
</body>

<?php include "./Partiels/Footer.html";?>
</footer>