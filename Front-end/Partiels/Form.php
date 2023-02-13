<?php

function constructFormForTriangle(){

 return   '<section class="Form_section layout_padding">
    <div class="container">

      <h2 class="main-heading">
        Dessiner un triangle maintenant

      </h2>
      <p class="text-center">
        Définier les trois point  pour réaliser un triangle
       </p>
      <div class="">
        <div class="contact_section-container">
          <div class="row">
            <div class="col-md-6 mx-auto">
              <div class="contact-form">
                <form  action = "./DrawingSpace.php">
                  <div >
                    1er Point <br>
                    <input class="col-md-5 " type="number" placeholder="X1" name="px1" min="-11" max="11" required>
                    <input class="col-md-6" type="number" placeholder="Y1" name="py1" min="-11" max="11" required>
                  </div>
                  <div>
                    2eme Point <br>
                    <input class="col-md-5" type="number" placeholder="X2" name="px2" min="-11" max="11" required>
                    <input class="col-md-6" type="number" placeholder="Y2" name="py2" min="-11" max="11" required>
                  </div>
                  <div>
                    3eme Point <br>
                    <input class="col-md-5" type="number" placeholder="X3" name="px3" min="-11" max="11" required>
                    <input class="col-md-6" type="number" placeholder="Y3" name="py3" min="-11" max="11" required>
                  </div>
                 
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn_on-hover">
                      Dessiner
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>';
}
//
//
function constructFormForRectangle(){

  return   '<section class="Form_section layout_padding">
  <div class="container">

    <h2 class="main-heading">
      Dessiner un triangle maintenant

    </h2>
    <p class="text-center">
      Définier les trois point  pour réaliser un triangle
     </p>
    <div class="">
      <div class="contact_section-container">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="contact-form">
              <form  action = "./DrawingSpace.php">
                <div >
                  Point <br>
                  <input class="col-md-5" type="number" placeholder="X1" name="px" min="-11" max="11" required>
                  <input class="col-md-6" type="number" placeholder="Y1" name="py" min="-11" max="11" required>
                </div>
                <div>
                  Heuteur <br>
                  <input class="col-md-5" type="number" placeholder="Hauteur" name="ht" min="0"  required>
                  
                </div>
                <div>
                  Largeur <br>
                   <input class="col-md-6" type="number" placeholder="Largeur" name="lt" min="0" required>
                </div>
               
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn_on-hover">
                    Dessiner
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>';
}
?>