
<?php //include "./Partiels/Header.html";?>
<head>
<link href="css/pratiquer.css" rel="stylesheet" />
<link rel="icon" href="../images/logo.jpeg" >
 
</head>
<body>

<div class="top_container sub_pages">
    <!-- header section strats -->
    
  </div>
<div class="toolbar">
  
    <div>
    <label id="stroke-width-label">Taille: <span>040</span>px</label>
    <input id="stroke-width" type="range" value="50" min="1" max="250">
    </div>
    
    <div class="hue-container">
      <label id="hue-label">Couleur <span>&nbsp;</span></label>
      <input id="hue" type="range" value="180" min="0" max="360">
      <div id="rainbow">
        <input type="checkbox" id="rainbow-toggle">
        <label></label>
      </div>  
    </div>
    
    <div id="eraser-container">
      <label>Eraser</label>
      <div id="eraser">
        <input type="checkbox" id="eraser-toggle">
        <label></label>
      </div>
    </div>
    

    
  <!--  add toggle for hue rotation?  -->
   
    <div class="buttons-container">
      
      <button id="reset">Reset</button>
    </div>
    
  <!--  background color?  -->
   <!-- Trigger/Open The Modal -->

   <div class="buttons-container">
   <a href="index.php" id="reset" classs="buttons-container"> Retourner
   </a>
   </div>
  </div> 
  
  <div class="full-container">
  Dessiner au-dessus des formes suivantes

  </div>
  <div class="d-flex justify-content-center mt-5">
     
  <canvas id="draw" width="80" height="80"></canvas>
</body>
<div class="d-flex justify-content-center mt-5">
  <?php include("./Partiels/Footer.html")?>
 </div>
<script type="text/javascript" src="js/pratiquer.js"></script>
</html>