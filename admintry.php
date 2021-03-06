<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity=
	"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <title>Admin page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
	background-color: lightgray;
	background-size: cover;
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
	width: 59%;
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
.btn {
    text-decoration: none;
    padding: 5px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
	position: absolute;
  right: 70px;  
  width: 85px;
  height: 30px;
  top: 100px;
}
h4 {
	top: 0%;
    color: black;
	position: absolute;
  right: 60px; 
}
.btn1 {
    text-decoration: none;
    padding: 5px 5px;
    color: white;
    border-radius: 3px;
    background: green;
	position: absolute;
  right: 289px;  
  width: 110px;
  height: 30px;
}
.btn2 {
    text-decoration: none;
    padding: 5px 5px;
    color: white;
    border-radius: 3px;
    background: green;
	position: absolute;
  right: 90px;  
  width: 110px;
  height: 30px;
}

</style>
</head>
<body background="adminback.png">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></BR>
<a href ="admin_tableback.php" align="center"><i class="fas fa-user-tie"></i> My Details</a><HR></BR>
  <a href="donar_tableback.php" align="center"><i class="fas fa-users"></i> Donar's details</a><HR></BR>
  <a href="agent_tableback.php" align="center"><i class="fas fa-users"></i> Agent's details</a><HR></BR>
  <a href="agent_donation_table.php" align="center" ><i class="fas fa-utensils"></i> Food collecting details</a><HR></BR>
  <a href="orphanagedetail.php" align="center"><i class="fas fa-clipboard-list"></i> Orphanage details</a><HR></BR>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Admin's account</span>

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
<li><a href ="wel.html"> Home </a>
</li>

<li><a href ="donate_nowback.php"> Previous </br> request </a>
</li>


<li><a href ="crud.php"> New </br> request </a>
</li>
</ul>

<form>
<button type="submit" class="btn" formaction="mypage.html"><i class="fas fa-sign-out-alt"></i> Logout </button>
<h4> Send message to agent &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Send message to donar</h4>
<button type="submit" class="btn1" formaction="send_msg.php">click here <i class="fas fa-comment"></i> </button>
<button type="submit" class="btn2" formaction="send_msg_donar.php">click here <i class="fas fa-comment"></i> </button>
</form>


   
</body>
</html> 
