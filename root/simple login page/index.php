<?php
include 'include/header.php';
?>
<html> 
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <style>
   #p1 {
    width: 100%;
    height: 530px;
   }
    </style>
  
</head>
<body> 
<h3><marquee><font color=" #00FF7F">This site for your enjoying</font></marquee></h3>
<div id="myCarousel" class="container carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img id="p1" src="images/tiger-2530158_960_720.jpg" alt="Tiger">
    </div>

    <div class="item">
      <img id="p1" src="images/pups.jpg" alt="Pups">
    </div>

    <div class="item">
      <img id="p1" src="images/125091.jpg" alt="Home sweet home">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body>
</html>