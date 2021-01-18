<!DOCTYPE html>
<html lang="fi">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, XML, PHP, JavaScript">
    <meta name="description" content="raimojamsendomain.fi">
    <meta charset="UTF-8">
    <title>Vieraskirja</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>

#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 4s linear infinite;
  animation: spin 4s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}

</style>

<body>

<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  
}

</script>

<div class="outCircle">
  <div class="rotate">
    <div class="counterrotate">
      <div class="inner">Tervetuloa!
      </div>
    </div>
  </div>
</div>

<style>

#hp  {
float: left;    
 margin: 0 0 0 15px;
}

#hp0 {
float: right;    
 margin: 0 0 0 15px;
}

body {
    background-image:url("jpg/mypaper.jpg");
    background-repeat: no-repeat;
    background-size: 150% 150%;
}
html {
    height: 150%
}

body {
  font-family: "Lato", sans-serif;
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

@media screen and (max-height: 600px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.outCircle {
  width: 200px;
  height: 200px;
  background-color: lightblue;
  left: 270px;
  position: absolute;
  top: 50px;
  -moz-border-radius: 100px;
  -webkit-border-radius: 100px;
  border-radius: 100px;
}
.rotate {
  width: 100%;
  height: 100%;
  -webkit-animation: circle 10s infinite linear;
}
.counterrotate {
  width: 50px;
  height: 50px;
  -webkit-animation: ccircle 10s infinite linear;
}
.inner {
  width: 100px;
  height: 100px;
  background: red;
  -moz-border-radius: 50px;
  -webkit-border-radius: 50px;
  border-radius: 100px;
  position: absolute;
  left: 0px;
  top: 0px;
  background-color: yellow;
  display: block;
}
@-webkit-keyframes circle {
  from {
    -webkit-transform: rotateZ(0deg)
  }
  to {
    -webkit-transform: rotateZ(360deg)
  }
}
@-webkit-keyframes ccircle {
  from {
    -webkit-transform: rotateZ(360deg)
  }
  to {
    -webkit-transform: rotateZ(0deg)
  }
}

</style>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.html">Home</a>
  <a href="contactme.html">Contact</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<img src="jpg/hp.jpg" alt="ruusu" width="200" height="200" id="hp"/>
<img src="jpg/hp.jpg" alt="ruusu" width="200" height="200" id="hp0"/>

    <nav class="navbar navbar-dark navbar-expand-sm bg-dark">

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">Yksinkertainen Vieraskirja PHP ja XML-tietovarastolla (yksinkertainen/Simple)</a>
            <div style="text-align: center"><a href="contactme.html" class="button large hpbottom">Yhteystiedot</a>
            </div>
          </li>
        </ul>
      
      </nav>

    <div class="container">
        
    </div>

    <div class="container">
      <div class="row">

        <div class="col">

          <h2 style="color:yellow">Opiskelijan vieraskirja</h2>
          
          <form method="POST" action="save.php">
              <div class="form-group">
              <i class="fa fa-user" style="font-size:48px;color:yellow"></i>
                  <label for="nimi"><p style="color:yellow">Nimi</label>
                  <input type="text" placeholder="anna nimi" name="nimi" id="nimi" class="form-control">
              </div>

              <div class="form-group">
              <i class="fa fa-envelope" style="font-size:48px;color:yellow"></i>
                  <label for="viesti"><p style="color:yellow">Viesti</label>
                  <input type="text" placeholder="viesti" name="viesti" id="viesti" class="form-control">
              </div>

              <div class="form-group">
              <i class="fa fa-envelope" style="font-size:48px;color:red"></i>
                  <label for="sähköposti"><p style="color:yellow">Sähköpostiosoite(vapaaehtoinen)</label>
                  <input class="form-control" placeholder="Contact's email" 
                  name="contact_email" id="contact_email" type="email" 
                  title="Contact's email (format: xxx@xxx.xxx)" 
                  pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*">
              </div>

              <div class="form-group">
              <i class="fa fa-clock-o"  style="font-size:48px;color:yellow"></i>
                  <label for="aika"><p style="color:yellow">Aika</label>
                  <input placeholder="aika" class="textbox-n" type="text" onfocus="(this.type='date')" id="aika">
              </div>
              <button style="font-size:24px">Lähetä<i class="fa fa-user"></i></button>

          </form>  

          <form action="remove.php" method="post" name="remove" id="calendarEdit">
              <i class="fa fa-trash-o" style="font-size:48px;color:blue"></i>
                  <input class="calendarInput" type="text" name="name" id="name">
                  <input type="submit" name="button" id="button" value="Delete">
          </form>

        </div>

        <div class="col">

        <h2 style="color:yellow">Vieraskirjan viestit</h2>
        <i class="fa fa-book" style="font-size:48px;color:yellow"></i>
        <ul class="list-group">
          
          <?php
  
        $xml = simplexml_load_file('data/mybook.xml');
          
        foreach($xml->nimi as $nimi){

          echo '<li class="list-group-item list-group-item-danger">' . $nimi->aika . '</li>'; 
          echo '<li class="list-group-item list-group-item-warning">' . $nimi->nimi . '</li>';
          echo '<li class="list-group-item list-group-item-success">' . $nimi->email . '</li>';
          echo '<li class="list-group-item list-group-item-light">' . $nimi->viesti . '</li>';

        }

          ?>
       </ul>

        </div>
        
      </div>
      
    </div>

<style>

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 21%;
   background-color: blue;
   color: white;
   text-align: center;
}

#hp1 {
float: left;    
 margin: 0 0 0 15px;
}

#hp2 {
float: right;    
 margin: 0 0 0 15px;
}

</style>

<div class="footer">
<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/780892/t/0"></script><p>&#169;By Ehdokkaasi: Raimo Jämsén</p>
<tr> 
  <td class="hover" height="60" style="font-family:Helvetica, Arial, sans-serif; font-size:16px; color:#d0292d;"> 
    <a href="mailto:diskos78@gmail.com" onMouseOver="this.style.color='#71080a'" onMouseOut="this.style.color='#d0292d'" style="color:#d0292d; ">diskos78@gmail.com</a> 
    <br> 
    <a href="http://www.raimojamsendomain.fi" onMouseOver="this.style.color='#71080a'" onMouseOut="this.style.color='#d0292d'" target="_blank" style="color:#d0292d;">http://www.raimojamsendomain.fi</a> 
  </td> 
</div>

<img src="jpg/hp.jpg" alt="ruusu" width="200" height="200" id="hp1"/>
<img src="jpg/hp.jpg" alt="ruusu" width="200" height="200" id="hp2"/>

</body>
</html>