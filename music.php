<?php
session_start();
$_SESSION['webpagetitle'] = "music";
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>musicworld</title>
    <style>
    *{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
    overflow-x: hidden;
}
html{
  scroll-behavior: smooth;
}
body{
    background-image: url("images/music.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    filter:drop-shadow(8px 8px 10px gray);
}
nav{
    background-color: rgba(0, 0, 0, 0.9);
    width: 100%;
    height: 5rem;
}
h1{
  position: relative;
  margin: 25px;
  margin-right: 10px;
  color: red;
  text-shadow: 2px 2px 2px royalblue;
}
.list {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin-top: -60px;
}
.list li{
    list-style: none;
    position: relative;
}
.list li a{
    text-decoration: none;
    color: white;
    font-size: 20px;
    margin: 10px;
    display: flex;
    align-items: center;
    font-family: 'Times New Roman', Times, serif;
}
.list li a:hover{
    color: slateblue;
}
.form-list{
display: flex;
justify-content: flex-end;
align-items: center;
text-align: center;
margin-top: -30px;
}
.form-list li{
    list-style: none;
    position: relative;
}
.form-list li a{
    text-decoration: none;
    margin: 10px;
    font-size: 20px;
    color: white;
    font-family: 'Times New Roman', Times, serif;
}
.main{
    display: block;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 200px;
}
.main h2{
font-size: 25px;
filter: brightness(200%);
}
.main h3{
    font-size: 35px;
filter: brightness(200%);
color: olive;
text-shadow: 2px 2px 2px slateblue;
}
.content::after{
   content: "";
   animation: changetext 10s infinite linear;
   color: seagreen;
}
@keyframes changetext{
    0%{content: "Instruments";}
    50%{content: "Music";}
    100%{content: "Home-Threater";}
}
.main p{
     text-shadow: 2px red;
     font-size: 20px;
}
.main button{
    width: 150px;
    height: 50px;
    margin: 30px;
    border-radius: 20px;
    cursor: pointer;
    font-size: 15px;
    font: bolder;
    border-style: outset;
    outline: none;
}
#shop{
    background-color: lightseagreen;
    color: seashell;
}
/*
.secondmain{
    background-color: white;
    width: 100%;
    height: 500px;
}
.grocery h4{
    display: flex;
    padding: 20px;
    font: bolder;
    font-size: 25px;
    margin: 20px;
}
*/
    </style>
  <script src="music.js"></script>
</head>
<body>
<nav>
      <h1>Music World</h1> 
      <ul class="list">
      <li><a href="#"><i class="fa fa-home">Home</i></a></li>
      <li><a href="#"><i class="fa fa-address-book">About US</i></a></li>
      <li><a href="#"><i class="fas fa-guitar">Instruments</i></a></li>
      <li><a href="#"><i class="fas fa-chalkboard-teacher">Music Class</i></a></li>
      </ul>
      <ul class="form-list">
      <li><a href="login.php"><i class="fa fa-sign-in">Login</i></a></li>
      <li><i><a href="form.php"><i class="fa fa-sign-out">Sign Up</i></a></i></li>
      </ul>
    </nav>
    <section>
      <div class="main">
      <h2>Shop With us this Festival</h2>
      <h3>Huge Discount in Every <span class="content"></span> Products</h3>
      <p>We have Good Instruments like Guitar, Piano and many more.<br> We provide best music classes for who keen to learn music and singing. <br> Music World institute have professional musician and have more than 20 years experience in this field.</p>
      <button id="shop"> Shop By Category</button> <button>Check New Offers</button>
      </div>
    </section>
    <!--
   <section class="secondmain">
       <div class="grocery">
      <h4><u>Music Instruments</u></h4>
       </div>
   </section> -->
</body>
</html>