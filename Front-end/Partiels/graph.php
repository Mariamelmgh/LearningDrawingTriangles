
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css">

body {
	margin: 0;
}

canvas {
    display: block;
    margin: 40px auto;
}

</style>

</head>

<body>

<canvas id="my-canvas" width="600" height="600"></canvas>

<script type="text/javascript" charset="utf-8">

var grid_size = 25;
var x_axis_distance_grid_lines = 12;
var y_axis_distance_grid_lines = 12;
var x_axis_starting_point = { number: 1, suffix: '\u03a0' };
var y_axis_starting_point = { number: 1, suffix: '' };

var canvas = document.getElementById("my-canvas");
var ctx = canvas.getContext("2d");

var canvas_width = canvas.width;
var canvas_height = canvas.height;

var num_lines_x = Math.floor(canvas_height/grid_size);
var num_lines_y = Math.floor(canvas_width/grid_size);

// Draw grid lines along X-axis
for(var i=0; i<=num_lines_x; i++) {
    ctx.beginPath();
    ctx.lineWidth = 1;
    
    // If line represents X-axis draw in different color
    if(i == x_axis_distance_grid_lines) 
        ctx.strokeStyle = "#000000";
    else
        ctx.strokeStyle = "#e9e9e9";
    
    if(i == num_lines_x) {
        ctx.moveTo(0, grid_size*i);
        ctx.lineTo(canvas_width, grid_size*i);
    }
    else {
        ctx.moveTo(0, grid_size*i+0.5);
        ctx.lineTo(canvas_width, grid_size*i+0.5);
    }
    ctx.stroke();
}

// Draw grid lines along Y-axis
for(i=0; i<=num_lines_y; i++) {
    ctx.beginPath();
    ctx.lineWidth = 1;
    
    // If line represents X-axis draw in different color
    if(i == y_axis_distance_grid_lines) 
        ctx.strokeStyle = "#000000";
    else
        ctx.strokeStyle = "#e9e9e9";
    
    if(i == num_lines_y) {
        ctx.moveTo(grid_size*i, 0);
        ctx.lineTo(grid_size*i, canvas_height);
    }
    else {
        ctx.moveTo(grid_size*i+0.5, 0);
        ctx.lineTo(grid_size*i+0.5, canvas_height);
    }
    ctx.stroke();
}

// Translate to the new origin. Now Y-axis of the canvas is opposite to the Y-axis of the graph. So the y-coordinate of each element will be negative of the actual
ctx.translate(y_axis_distance_grid_lines*grid_size, x_axis_distance_grid_lines*grid_size);

// Ticks marks along the positive X-axis
for(i=1; i<(num_lines_y - y_axis_distance_grid_lines); i++) {
    ctx.beginPath();
    ctx.lineWidth = 1;
    ctx.strokeStyle = "#000000";

    // Draw a tick mark 6px long (-3 to 3)
    ctx.moveTo(grid_size*i+0.5, -3);
    ctx.lineTo(grid_size*i+0.5, 3);
    ctx.stroke();

    // Text value at that point
    ctx.font = '9px Arial';
    ctx.textAlign = 'start';
  //  alert(x_axis_starting_point.number*i , grid_size*i-2);
   // ctx.fillText(x_axis_starting_point.number*i + x_axis_starting_point.suffix, grid_size*i-2, 15);
   ctx.fillText(x_axis_starting_point.number*i , grid_size*i-2, 15);
}

// Ticks marks along the negative X-axis
for(i=1; i<y_axis_distance_grid_lines; i++) {
    ctx.beginPath();
    ctx.lineWidth = 1;
    ctx.strokeStyle = "#000000";

    // Draw a tick mark 6px long (-3 to 3)
    ctx.moveTo(-grid_size*i+0.5, -3);
    ctx.lineTo(-grid_size*i+0.5, 3);
    ctx.stroke();

    // Text value at that point
    ctx.font = '9px Arial';
    ctx.textAlign = 'end';
   //ctx.fillText(-x_axis_starting_point.number*i + x_axis_starting_point.suffix, -grid_size*i+3, 15);
   ctx.fillText(-x_axis_starting_point.number*i , -grid_size*i+3, 15);
 
}

// Ticks marks along the positive Y-axis
// Positive Y-axis of graph is negative Y-axis of the canvas
for(i=1; i<(num_lines_x - x_axis_distance_grid_lines); i++) {
    ctx.beginPath();
    ctx.lineWidth = 1;
    ctx.strokeStyle = "#000000";

    // Draw a tick mark 6px long (-3 to 3)
    ctx.moveTo(-3, grid_size*i+0.5);
    ctx.lineTo(3, grid_size*i+0.5);
    ctx.stroke();

    // Text value at that point
    ctx.font = '9px Arial';
    ctx.textAlign = 'start';
    ctx.fillText(-y_axis_starting_point.number*i + y_axis_starting_point.suffix, 8, grid_size*i+3);
}

// Ticks marks along the negative Y-axis
// Negative Y-axis of graph is positive Y-axis of the canvas
for(i=1; i<x_axis_distance_grid_lines; i++) {
    ctx.beginPath();
    ctx.lineWidth = 1;
    ctx.strokeStyle = "#000000";

    // Draw a tick mark 6px long (-3 to 3)
    ctx.moveTo(-3, -grid_size*i+0.5);
    ctx.lineTo(3, -grid_size*i+0.5);
    ctx.stroke();

    // Text value at that point
    ctx.font = '9px Arial';
    ctx.textAlign = 'start';
    ctx.fillText(y_axis_starting_point.number*i + y_axis_starting_point.suffix, 8, -grid_size*i+3);
    
}


//Draw a triangle


//First Point
<?php 
  $p1  = new Point(0,0);
  $p2  = new Point(0,0);
  $p3  = new Point(0,0);
  //
  $p1_  = new Point(0,0);
  $p2_  = new Point(0,0);
  $p3_  = new Point(0,0);
 
 
 
 if(isset($_REQUEST["px1"]) && isset($_REQUEST["py1"])  && isset($_REQUEST["px2"]) && isset($_REQUEST["py2"]) && isset($_REQUEST["px3"]) && isset($_REQUEST["py3"])){

//echo "alert(".$_REQUEST["py1"].")";
  $p1_ = new Point($_REQUEST["px1"],$_REQUEST["py1"]);
  $p2_ = new Point($_REQUEST["px2"],$_REQUEST["py2"]);
  $p3_ = new Point($_REQUEST["px3"],$_REQUEST["py3"]);
  
  //
  $p1-> gettingPoint($_REQUEST["px1"],$_REQUEST["py1"]);
  $p2 -> gettingPoint($_REQUEST["px2"],$_REQUEST["py2"]);
  $p3-> gettingPoint($_REQUEST["px3"],$_REQUEST["py3"]);
  

 
 echo '
 ctx.beginPath()

 ctx.moveTo('.$p1->afficherX().','.$p1->afficherY().');
 ctx.lineTo('.$p2->afficherX().','.$p2->afficherY().');
 ctx.lineTo('.$p3->afficherX().','.$p3->afficherY().');
 ctx.lineTo('.$p1->afficherX().','.$p1->afficherY().');
 ctx.strokeStyle = "red";
 ctx.stroke()

 
 ctx.closePath()
 ';
  }

  //Draw a Rectangle
  // Point d'origine

  $p  = new Point(0,0);
  $p_ = new Point(0,0);
  if(isset($_REQUEST["px"]) && isset($_REQUEST["py"])   && isset($_REQUEST["ht"]) && isset($_REQUEST["lt"])){
    
    $p_ = new Point($_REQUEST["px"],$_REQUEST["py"]);
    $p-> gettingPoint($_REQUEST["px"],$_REQUEST["py"]);
    $h = $_REQUEST["ht"] * -25; 
    $l = $_REQUEST["lt"] * 25;
  
   echo '
   
   ctx.beginPath()
  
ctx.moveTo('.$p->afficherX().','.$p->afficherY().');// Point dorigine x= 0, y = 50
 ctx.lineTo('.$p->afficherX() + $l.', '.$p->afficherY().');// x = x +largeur, y = y
 ctx.lineTo('.$p->afficherX() + $l.', '.$p->afficherY() +$h.');// x = x,largeur= y+heuteur
 ctx.lineTo('.$p->afficherX().', '.$p->afficherY()+$h.');// x = x-  largeur, y=y
 ctx.lineTo('.$p->afficherX() .', '.$p->afficherY().');//x=x, y=y-largeur
 ctx.strokeStyle = "red";
   ctx.stroke()
  
   
   ctx.closePath()
   ';

}

 
?></script>

<?php
if(isset($_REQUEST["px1"]) && isset($_REQUEST["py1"])  && isset($_REQUEST["px2"]) && isset($_REQUEST["py2"]) && isset($_REQUEST["px3"]) && isset($_REQUEST["py3"])){

$triangle = new Triangle($p1_,$p2_,$p3_);
$ourTriangleIs= "";

if($triangle->isocele()){
    $ourTriangleIs.= "isocele";
}
 if($triangle->equilateral()){
    $ourTriangleIs .= " equilateral";
}
 if($triangle->rectangle()){
    $ourTriangleIs.= " rectangle";
}
   if($ourTriangleIs != ""){
    echo "<div class='d-flex justify-content-center mt-5 '> <h3>Votre triangle est $ourTriangleIs </h3></div>";
}

}
if(isset($_REQUEST["lt"]) && isset($_REQUEST["ht"])){
    $rectangle = new Rectangle($p_,$_REQUEST["lt"],$_REQUEST["ht"]);
    echo "<div class='d-flex justify-content-center mt-5 '> <h3>La  surface de votre rectangle est ". $rectangle-> surface(). "</h3></div>";

    
}

?>
</body>
</html>