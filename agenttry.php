<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity=
	"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <title>Agent page </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
background-image: url("agentbackground.png");
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.home
{
	width: 85%;
	height: 80px;
}
ul
{
	List-style: none;
	padding: 0;
	margin: 0;
	position: absolute;
	background: #000033;
	left: 29%;
	width: 34%;
}
ul li 
{
	float: left;
	margin-top: 20px;
}
ul li a{
	width: 150px;
	color: white;
	display: block;
	text-decoration: none;
	font-size: 20px;
	text-align: center;
	padding: 10px;
	border-radius: 10px;
	font-family: century Gothic;
	font-weight: bold;
}
ul li a:hover
{
	background: #669900;
}
.img
{
width: 90%;
margin-top: 5%;
max-width: 600px;
bacground: #f1f1f1;
position: absolute;
top: 28%;
left: 30%;

}
{
height: 100px;
}
h1
{
width: 90%;
margin-top: 5%;
max-width: 600px;
bacground: #f1f1f1;
position: absolute;
top: 32%;
left: 72%;
}
h2
{
width: 90%;
margin-top: 5%;
max-width: 600px;
bacground: #f1f1f1;
position: absolute;
top: 38%;
left: 12%;
font-size: 32;
}
img
{
top: 45%;
}
.images
{
width: 84%;
margin-top: 5%;
max-width: 600px;
bacground: #f1f1f1;
position: absolute;
top: 18%;
left: 12%;
}
.btn {
    text-decoration: none;
    padding: 5px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
	position: absolute;
  right: 90px;  
  width: 85px;
  height: 30px;
}
h4 {
	top: 2%;
    color: black;
	position: absolute;
  right: 210px; 
}
.btn1 {
    text-decoration: none;
    padding: 5px 5px;
    color: white;
    border-radius: 3px;
    background: green;
	position: absolute;
  right: 233px;  
  width: 110px;
  height: 30px;
}

</style>
</head>
<body >
<section id="one">
<div id="mySidenav" class="sidenav">
  <a align="center">My Account</a></br>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="mypage.html" align="center"> <i class="fas fa-home"></i> My Home Page</a><hr></br>
  <a href="mission.html" align="center"><i class="fas fa-book-reader"></i> Our Mission</a><hr></br>
  <a href="about.html" align="center"><i class="fas fa-exclamation-circle"></i> About us </a><hr></br>
  <a href="https://forms.gle/oyDg3poPy5SVrDkB7" align="center"><i class="fas fa-id-card"></i> Contact Admin</a><hr></br>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Agent's account</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<div class="Main">
<div class="home">
<ul> 
<li><a href ="wel.html"><br> Home </a>
</li>

<li><a href ="mydonation_agent.php"> My </br> donation record</a>
</li>


<li><a href ="insert_agentdonation.php">Donation </br>form</a>
</li>
</ul>
<div class="images">
<img src="agentpic.png" width="550" height="475" >
</div>
<form>
<button type="submit" class="btn" formaction="mypage.html"><i class="fas fa-sign-out-alt"></i> Logout </button>
<h4><i class="fas fa-envelope-open"></i> Notification from Admin </h4>
<button type="submit" class="btn1" formaction="index_notification.php">click here  <i class="fas fa-reply"></i> </button>
</form>
</section>

</body>
</html> 
