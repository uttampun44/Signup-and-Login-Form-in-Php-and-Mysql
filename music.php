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
    overflow-y: hidden;
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

.secondmain{
    background-color: white;
    width: 100%;
    height: 1000px;
    overflow-y: hidden;
}
.grocery h4{
    display: flex;
    padding: 20px;
    font: bolder;
    font-size: 25px;
    margin: 20px;
}
.music-image{
    width: 160vh;
    margin: 20px;
    position: relative;
    left: 10%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    overflow-y: hidden;
}
.images img{
    width: 40vh;
    height: 40vh;
    gap: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px;
    padding-right: 40px;
    border-radius: 10px;
    background-color: azure;
}
.images h5{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 15px;
    font-style: bold;
    display: flex;
    justify-content: center;
}
.images h6{
   display: flex;
   justify-content: center;
   font-size: 15px;
}
.images h7{
    display: flex;
    justify-content: center;
    font-size: 15px;
}
.images button{
    background-image: linear-gradient(to right, #CC95C0 0%, #DBD4B4  51%, #CC95C0  100%);
    display: flex;
    justify-content: center;
    align-items: center;
    width: 18vh;
    height: 5vh;
    font-size: 15px;
    font: bolder;
    margin: 10px;
    cursor: pointer;
    color: white;
    position: relative;
    left: 25%;
    outline: none;
}       

.second-images{
    width: 160vh;
    margin: 20px;
    gap: 2rem;
    position: relative;
    left: 10%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    overflow-y: hidden;
}

.second-row img{
    width: 40vh;
    height: 40vh;
    gap: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px;
    padding-right: 40px;
    border-radius: 10px;
    background-color: azure;
}
.second-row h5{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 15px;
    font-style: bold;
    display: flex;
    justify-content: center;
}
.second-row h6{
   display: flex;
   justify-content: center;
   font-size: 15px;
}
.second-row h7{
    display: flex;
    justify-content: center;
    font-size: 15px;
}

.second-row button{
    background-image: linear-gradient(to right, #CC95C0 0%, #DBD4B4  51%, #CC95C0  100%);
    display: flex;
    justify-content: center;
    align-items: center;
    width: 18vh;
    height: 5vh;
    font-size: 15px;
    font: bolder;
    margin: 10px;
    cursor: pointer;
    color: white;
    position: relative;
    left: 25%;
    outline: none;
} 

.second-last{
    width: 100%;
    height: 500px;
    background-color: #f5e6ff;
}
.service{
    height: 70px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.service h8{
    font-size: 20px;
}
.payment-details{
    width: 100%;
    height: 30vh;
    padding: 40px;
    padding-right: 40px;
    background-color: white;
    overflow-y: hidden;
    display: flex;
    justify-content: space-around;
}
.payment-row{
    width: 100%;
}
.payment-row img{
    width: 65px;
    height: 50px;
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.payment-details h9{
  display: flex;
  align-items: center;
  font-size: 18px;
}
.update-page{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 100%;
    height: 100px;
    padding: 20px;
}
.update-page h10{
    font-size: 22px;
    font-style: bolder;
    font-family: 'Times New Roman', Times, serif;
}
.forms{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 1px;
}
.forms input[type=text] {
    width: 50vh;
    height: 5vh;
    text-align: center;
    border-color: mediumorchid;
    outline: none;
}
.forms button{
    width: 18vh;
    height: 5vh;
    background-color: mediumorchid;
    color: white;
    cursor: pointer;
    border-style: hidden;
    border-radius: 2px;
    outline: none;
}
footer{
    width: 100%;
    height: 550px;
    background-color: black;
}
.music-hub{
    color: white;
    position: relative;
    top: 20%;
    left: 7%;
    width:150px;
    display: flex;
    align-items: center;
    text-align: center;
    font-size: 30px;
    color: red;
}
.course-content{
	width: 170px;
	position: relative;
	left: 25%;
	top: 8%;
}
.course-content a{
	font-size: 19px;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 2px;
	text-decoration: none;
    color: slategray;
    padding: 2px;
}
.course-content h12{
	font-size: 25px;
	padding: 5px;
	margin: 10px;
	text-align: center;
    color: white;
}
.copyrights{
	position: relative;
	left: -5%;
	top: 10%;
}
.copyrights p{
	display: flex;
	justify-content: center;
	align-items: center;
	font-size: 20px;
    color: yellow;
}
.about-us{
    position: relative;
    left: 45%;
    top: -23%;
    height: 150px;
    width: 500px;
    text-align: center;
}
.about-us h13{
    color: white;
    font-size: 25px;
}
.about-us h14{
    color: white;
}
.about-us p{
    color: yellow;
}

.follow-us{
    position: relative;
    top: -20%;
    left: 55%;
}
.logo{
    display: flex;
    align-items: center;
}
.follow-us h14{
    color: white;
    font-size: 20px;
}
#facebook{
    color: blue;
    font-size: 50px;
    padding: 10px;
}
#instagram{
    color: red rebeccapurple;
    font-size: 50px;
    padding: 10px;
}
#twitter{
    color: blue;
    font-size: 50px;
    padding: 10px;
}
#linkedin{
   color: lightskyblue;
   font-size: 50px;
   padding: 10px;
}
    </style>
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
       
       <!-- Music Instruments product -->
   <section class="secondmain">
       <div class="grocery">
      <h4><u>Music Instruments</u></h4>
       </div>

         <div class="music-image">
          <div class="images">
          <img src="./images/fender.jpg"/>
          <h5>Electric Guitar</h5>
          <h6><s>Price 8000 Rs</s></h6>
          <h7>Discount 10%</h7>
          <button>Buy Now</button>
          </div>

          <div class="images">
          <img src="./images/Pearl.jpg"/>
          <h5>Drums</h5>
          <h6><s>Price 20000 Rs</s></h6>
          <h7>Discount 10%</h7>
          <button>Buy Now</button>
          </div>

          <div class="images">
          <img src="./images/Piano.jpg"/>
          <h5>Piano</h5>
          <h6><s> Price 15000 Rs</s></h6>
          <h7>Discount 10%</h7>
          <button>Buy Now</button>
          </div>
         </div>

         <div class="second-images">
             <div class="second-row">
                 <img src="./images/sexaphone.jpg" />
                  <h5>Sexaphone</h5>
                 <h6><s> Price 25000 Rs</s></h6>
                 <h7>Discount 10%</h7>
                <button>Buy Now</button>
               </div>

               <div class="second-row">
               <img src="./images/Zoom.jpg" />
                  <h5>Zoom Box</h5>
                 <h6><s> Price 18000 Rs</s></h6>
                 <h7>Discount 10%</h7>
                <button>Buy Now</button>        
               </div>

               <div class="second-row">
               <img src="./images/Amplifiers.jpg" />
                  <h5>Marshall Amplifier</h5>
                 <h6><s> Price 12000 Rs</s></h6>
                 <h7>Discount 10%</h7>
                <button>Buy Now</button>    
               </div>
         </div>
   </section> 

   <section class="second-last">
   <div class="service">
   <h8>Our Services</h8>
   </div>
   <div class="payment-details">
       <div class="payment-row">
    <img src="./images/card.png" />
    <h9>Secured Payment</h9>
   </div>

       <div class="payment-row">
    <img src="./images/seller.jpg" />
    <h9>Verified Sellers</h9>
   </div>

   
   <div class="payment-row">
    <img src="./images/delivery.png" />
    <h9>On Time Delivery</h9>
   </div>

   <div class="payment-row">
    <img src="./images/customerservice.jpg" />
    <h9>Excellent Customer service</h9>
   </div>
   </div>

       <div class="update-page">
           <div>
           <h10>Keep and & Get Unlimited Offers</h10>
           <p>Sign Up of our newsletter to receive updates and exclusive offers</p>
        </div>
       </div>

           <div class="forms">
           <form method="POST">
           <input type="text"  name="email" placeholder="You email address" required autocomplete="off" /><button name="submit">Subscribe</button>
           </form>
           </div>
   </section>

 <footer>
     <div class="music-hub">
             <h11>Music Hub</h11>
         </div>

         <div class="course-content">
					<h12>Music classes</h12>
				<a href="#">Guitar</a>
				<a href="#">Drum</a>
				<a href="#">KeyBoard</a>
				<a href="#">Flue</a>
				<a href="#">Ochestra</a>
            </div>
            
            <div class="about-us">
				<h13>About Us</h13>
                <p>Music Hub Founded in August 2000 in New York, U.S.<br>
                   You could find any type of instruments and music tutors.<br>
                   Uttam Pun is the C.E.O of this Company.
            </p>
    
            </div>

            <div class="follow-us">
             <h14>Follow Us On:</h14>
             <div class="logo">
             <a href="#"><i class="fa fa-facebook" id="facebook"></a></i>
             <a href="#"><i class="fa fa-instagram" id="instagram"></a></i>
             <a href="#"><i class="fa fa-twitter" id="twitter"></a></i>
             <a href="#"><i class="fa fa-linkedin" id="twitter"></a></i>
            </div>
            </div>
			<div class="copyrights">
				<p>© 2020 Music Hub Inc. All rights reserved.</p>
			</div>
 </footer>

 <?php
$connection = "localhost:3306";
$user = "root";
$password = "";
$database = "musicworld";

$server = mysqli_connect($connection, $user, $password, $database);

if($server) {
  
} else{
   die("Unable to connect");
}

  if (isset($_POST['submit'])) {
      $email = mysqli_real_escape_string($server, $_POST['email']);

      $insert = "INSERT INTO subsribe(email)VALUES('$email')";
      $insertquerry = mysqli_query($server, $insert);

      if($insert) {
          ?>
     <script>
         alert("Inserted Successfully");
         location.replace('music.php')
     </script>
          <?php
      } else{
        ?>
        <script>
            alert("Not Inserted.");
        </script>
             <?php
      }
  }
     ?>

   <script type="text/javascript">
     
   </script>
</body>
</html>