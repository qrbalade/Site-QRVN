﻿<!DOCTYPE html>
<html lang="fr">
 <head>
  <meta charset='utf-8'>
  <title>QRVillers-lès-Nancy</title>
  <script src="java.js" type="text/javascript">
  </script>   
     <link rel="stylesheet" href="CSS.css" type="text/css" />

 </head>
 <body>

 <header>
 <?php  require("decide-lang.php"); ?>
</header>

<nav id="primary_nav">
 
     <ul>
 
        <li><a onClick="javascript:document.location.href='QRVillers-les-Nancy.php'"><?php echo QR; ?></a></li>
 
        <li><a onClick="javascript:document.location.href='balade.php'"><?php echo balade; ?></a></li>
 
        <li><a onClick="javascript:document.location.href='ldb.php'"><?php echo ldb; ?></a></li>
 
        <li><a onClick="javascript:document.location.href='esp.php'"><?php echo esp; ?></a></li>
 
 

 

    </ul>

</nav>

<div class="global">

<img src="iconeQRVillers-les-Nancy.png" alt="logo QRVillers-lès-Nancy" width="150" height="150" id="im">

<h1 class="titre">Le château Simon de Chatellus</h1>
<img src="simondechatellus.jpg" alt="Le château Simon de Chatellus" width="600" height="368" id="mid">
<br/>

<p id="desc"><?php echo chatt; ?></p>

<br/>
<audio id="audioPlayer"  controls>
<source src="Simon de chatellus.m4a" type="audio/ogg"> 
</audio>
<?php echo chatellus; ?>


<p id="desc">Carte</p>

<br/>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1566.70189736642!2d6.144880084922174!3d48.66976679425719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794a264110c8f21%3A0x660cbaccac846cf0!2s%C3%89cole+primaire+du+ch%C3%A2teau!5e0!3m2!1sfr!2sfr!4v1545861253563" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

<br/>

<p id="desc">Photos</p>

<div style="display: inline-block; margin-left: 5px;">
<p class="imgc"><img src="chap1.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(1)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="chap3.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(2)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="chap4.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(3)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="chap2.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(4)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="chap5.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(5)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="chap6.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(6)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="chap7.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(7)" class="hover-shadow cursor"></p>
<p class="imgc"><img src="chap8.jpg" alt="photo château" height="300"
  onclick="openModal();currentSlide(8)" class="hover-shadow cursor"></p>

</div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 8</div>
      <img src="chap1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 8</div>
      <img src="chap3.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">3 / 8</div>
      <img src="chap4.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 8</div>
      <img src="chap2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 8</div>
      <img src="chap5.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 8</div>
      <img src="chap6.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">7 / 8</div>
      <img src="chap7.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">8 / 8</div>
      <img src="chap8.jpg" style="width:100%">
    </div>



    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

</div>

 </body>
</html>
