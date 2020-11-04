<?php 
  require_once('connect.php');
?>
<html>
  <!-- miwwee  -->
<head>
<title>Planveler</title>
<meta name="viewport" content="width=device-width, initial-scale=1,height=device-height">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" href="extentions/css/planveler.css">
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body {
    background: url(pic/bg3.png);
    background-size: cover;
    background-position: center;
  }
</style>
</head>
<body onclick="closeNav()">
<div id="mySidenav" class="sidenav" onclick="event.stopPropagation();">
  <span style="font-size:35px;cursor:pointer;position:absolute;top: 0;right: 5;" onclick="closeNav()">&times;</span>
  <div style="display: block; color: #948BFF; text-align: center;">ชื่อเราเองจ้า</div>
  
  <a href="mainpage.html">หน้าหลัก</a>
  <a href="mainpage.html">ทริปของฉัน</a>
  <a href="mainpage.html">รายการที่บันทึก</a>
  <a href="mainpage.html">รายการทริปที่แนะนำ</a>
  <a href="mainpage.html">แนะนำการใช้งาน</a>
  <a href="mainpage.html">เกี่ยวกับเรา</a>
  <a href="mainpage.html">คำถามที่พบบ่อย</a>
  <a href="mainpage.html">ติดต่อเรา</a>

  
  <div style="position: absolute;bottom: 0px;">
  <p><p><p></p><a href="#">Login</a></p></div>
</div>

<div class="container">
        <div class="row">
<div id="navbar">
<span style="font-size:35px;cursor:pointer;" onclick="openNav(event)">&#9776;</span>

<span class="icon"> <a href="index.php"> 
    <img src="pic/66.png" width="160" height="90" alt="" loading="lazy">
  </a>
 </span>

 <div class="col-lg-2 col-md-2 col-lg-2 offset-lg-6 offset-9" style="padding-right:20px;">
  <div class="row" style="float: right;">
   <div class="loginbar">
    <a href="#changlanguage"><img src="pic/Group 3.png" width="90" height="25"alt="th/eng"></a>  
 </div>
</div>
  
   <div class="row" style="float: right;margin-right: auto;">
    <div class="col-auto">
      <div class="loginbar">
   <a href="register.php"style=><img src="pic/Group 5.png" alt="Register"></a> 
   <a href="login.php"style=><img src="pic/Group 7.png" alt="Login"></a> 
  </div>
  </div>
</div>
</div> 
</div>
</div>
</div>
<div class="headerlogin">planveler</div>
<div class="container" id="headloginpage">
  <div class="row">
      <div class="stupid-line"></div>
  <div class="row">
    <div class="login-logo"><img src="pic/logo.png"></div>  <div class="stupid-line2"></div>
  </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <div class="registerinfomation">
        <div class="content-4"style="font-weight:bold">General Information</div>

          <form action="register.php" method="post">
          <input type="text" class="form-control" id="userid" placeholder="Username" required>
          <input type="email" class="form-control" id="emaillogin" placeholder="Email"required>
          <input type="text" class="form-control" id="password" placeholder="Firstname"required>
          <input type="text" class="form-control" id="password" placeholder="Lastname"required>
          <input type="password" class="form-control" id="password" placeholder="Password"required>
          <input type="password" class="form-control" id="password" placeholder="Confirm-password"required>

      </div>
              
    </div>
    <div class="col-4">
      <div class="stupid-line3"></div>
    </div>
    <div class="col-lg-4">
      <div class="registerinfomation">
        <div class="content-4"style="font-weight:bold">Contect Details</div>

       
        <input type="text" class="form-control" id="sex" placeholder="Gender" required>
        <input type="text" class="form-control" id="job" placeholder="Job"required>
        <input type="tel" class="form-control" id="tel" placeholder="Tel."required>
        <input type="date" class="form-control" id="password" placeholder="Birthdate"required>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px;height:10px;width: 10px;">
        I agree to the <a href="#" style="color:dodgerblue">Planveler Terms & Conditions</a>.
        <div class="registerbtu"><a href="#submit">Regist</a></div>


    </div>
       </div>
    </div>
</div>
  </div>
<div class="bot-bar"style="z-index:1;">
  <div class="container">
    <div class="row justify-content-center" style="margin-top:20px;">
      <div class="col-auto"style="font-family: 'MykidsHandwrittenRegular;'
      !improtant;">
      <div class="botbar-data">
        <h1>About us</h1><p>
          <p><a href="/planveler.html">What's Planveler?</a>
            <p><a href="Howtouse.html">How to use</a>
      </div>
    </div>
      <div class="col-auto">
        <div class="botbar-data">
        <h1>Contact us</h1><p>
          <p><a href="https://www.google.com/maps/dir/13.7358628,100.7661637/%E0%B8%9E%E0%B8%A3%E0%B8%B0%E0%B8%88%E0%B8%AD%E0%B8%A1%E0%B9%80%E0%B8%81%E0%B8%A5%E0%B9%89%E0%B8%B2%E0%B8%A5%E0%B8%B2%E0%B8%94%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%B1%E0%B8%87/@13.7354147,100.7609192,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x311d664988a1bedf:0xcc678f180e221cd0!2m2!1d100.7782323!2d13.7298889"target="_blank">Address</a>
            <p><a href="">E-mail</a>
      </div>
    </div>
      <div class="col-auto">
        <div class="botbar-data">
        <h1>Planveler Policies</h1><p>
          <p><a href="Terms&Condition.html">Terms & Conditions</a> 
            <p><a href="/Help.html">Help Center</a>
      </div>
    </div>
      <div class="col-auto">
        <div class="botbar-data">
        <h1>Follow us</h1><p>
          <a href="#facebook"><img src="pic/Facebook logo 2.png"></a><p></p>
           <a href="#line"><img src="pic/Line logo 1.png"></a>
           <a href="#ig"><img src="pic/Instragram Logo 2.png"></a>
      </div>
      </div>
  </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="/extentions/css/palnvevlerscript.js"></script>
</body>
</html>