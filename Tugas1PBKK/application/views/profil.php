<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" type="image/png" href="MeLogo.png">
  <title>
  ME
  </title>
  <style>
      @font-face{
  font-family: "LuckLuckiestGuy";
  src: url('sumber/LuckiestGuy.ttf');
}

body{
  margin: 0;
  padding: 0;
  background: #161616;
}

nav.TopBar1{
  width: 100%;
  height: 35px;
  background: #161616;
}


.fa {
  padding : 2px;
  font-size: 20px;
  width: 20px;
  text-align: center;
  text-decoration: none;
  border-radius: 75%;
  margin: 3px 10px 0px 10px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-instagram {
  background: #9400D3;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.About a{
  display: inline-block;
  float: right;
  padding: 5px 10px 0px 10px;
  color: gold;
  text-align : center;
  font-size: 20px;
  text-decoration: none;
  font-family: LuckyGuy;
  border-radius: 10px;
}

.About a:hover{
  background-color: #adafb2;
  color : black;
}

nav.TopBar2{
  width: 100%;
  height: 60px;
  background: #444649;
}

.Logo img{
  padding: 5px 0px 0px 10px;
  width: 50px;
  height: 50px;
}

.judul{
  position: absolute;
  padding-left: 100px;
  margin : 0px;
  color: yellow;
  font-size: 50px;
  font-family: LuckiestGuy;
}


.slideshow-container {
  max-width: 1628px;
  position: relative;
  margin: auto;
}
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.numbertext {
  color: #f2f2f2;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

.contentbar{
  width: 100%;
  height: 300px;
  background: #000000;
}

.flip-card1{
z-index: 100;
  background-color: transparent;
  width: 500px;
  height: 700px;
  perspective: 1000px;
  padding-left: 100px;
  position: absolute;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card1:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #000000;
  color: black;
}

.flip-card-back {
font-size: 7pt;
  background-color: black;
  opacity: 0.5;
  color: gold;
  transform: rotateY(180deg);
}
.flip-card2{
  z-index: 75;
  background-color: transparent;
  width: 500px;
  height: 700px;
  padding-left: 675px;
  position: absolute;

}
.flip-card2:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.footer {
   background-image: url("white.jpg");
   background-position: bottom;
   background-attachment: fixed;
   background-repeat: no-repeat;
   background-size: cover;
   height: 70px;
   width: 100%;
}
.tulisan{
  text-align: center;
  padding-top: 0px;
}

.konten1{
  background: white;
  margin-left: 100px;
  margin-right: 100px;
}
  </style>
</head>

<body>
  <nav class = "TopBar2">
    <div class = "About">
        <a href="index.html" class="List1" style="padding-right: 10px">Home Page</a>
    </div>
    <div class = "Logo" style="padding-bottom: 10px">
      <p class = "judul">About Me</p>
      <?php
            $image_properties1 = array(
            'src'   => 'sumber/MeLogo.png',
            'alt'   => 'alfin portrait',
            );
        
              echo img($image_properties1);
          ?>
    </div>
  </nav>

  <nav>
    <div class="slideshow-container">

    <nav>
    <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <?php
            $image_properties = array(
            'src'   => 'sumber/sg.jpg',
            'alt'   => 'alfin portrait',
            'width' => '100%',
            );
              echo img($image_properties);
      ?>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <?php
            $image_properties = array(
            'src'   => 'sumber/berat.jpg',
            'alt'   => 'alfin portrait',
            'width' => '100%',
            );
              echo img($image_properties);
      ?>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <?php
            $image_properties = array(
            'src'   => 'sumber/sch.jpg',
            'alt'   => 'alfin portrait',
            'width' => '100%',
            );
              echo img($image_properties);
      ?>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
  </nav>

  <br>
  
  <nav>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
  </nav>


<div class="konten1" style="background-color: grey">
  <h1 style="font-family: LuckiestGuy; color: black; padding-left: 50px"><font size="7">the brief history of me</font></h1>
  <nav>
    <div class="flip-card1">
      <div class="flip-card-inner">
          <div class="flip-card-front">
          <?php
            $image_properties = array(
            'src'   => 'sumber/bayi.jpg',
            'alt'   => 'alfin portrait',
            'width' => '500',
            'height'=> '700',
            );
        
              echo img($image_properties);
          ?>
          </div>
          <div class="flip-card-back">
            <br></br>
            <br></br>
            <h1><font size="10">ME</font></h1>
            <br></br>
            <br></br>
            <p>
              <font size="6">My name is Alfin Pradana, they call me alfin. I was born in Jakarta at 28th September 1999. i have 2 siblings, and i am the oldest. my sister is 1 years away from me, and my brother is 4 years old right now. </font>
            </p>
          </div>
        </div>
    </div>
    <div class="flip-card2">
      <div class="flip-card-inner">
        <div class="flip-card-front">
        <?php
            $image_properties = array(
            'src'   => 'sumber/foto2.jpg',
            'alt'   => 'alfin portrait',
            'width' => '500',
            'height'=> '700',
            );
        
              echo img($image_properties);
          ?>
        </div>
        <div class="flip-card-back">
          <br></br>
          <br></br>
          <br></br>
          <h1><font size="7">ME</font></h1>
        <p>
              <font size="6">Currently, i am a student at Institut Teknologi Sepuluh Nopember, in Informatics major. My hobby is to traveling to places that never discovered before. i always dream too encounter all of the cultures that exist in this world. And my another hobbies is to watch and learn how to cook, eventho that i am not good at it :)</font>
        </p>
        <br></br>
        </div>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <div style="padding: 350px"></div>
  <div class="footer">
    <div class="tulisan">
    <P> This Website Created by Alfin Pradana</P>
    <h4> Content copyright 2019.  Alfinpr ™  Established September 19th , 2019. All rights reserved.</h4>
    </div>
  </div>
  
</div>

</body>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>




</html>