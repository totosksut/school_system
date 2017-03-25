<!DOCTYPE html>
<html>
<title>::System of Create By Toto::</title>
<head>
	<link rel="stylesheet" href="..\myphp\style\styles.css">
</head>
<body>
<?php
  if(!$_GET){

  }
  else if($_GET["myval"]==1){ ?>
  <script>
     function div_show(){
      document.getElementById('id01').style.display = "block";
     }
     alert("Username or Password is Incorrect!!!, Please try again");
     window.onload = div_show;
  </script>
<?php }else if($_GET["myval"]==2){ ?>
  <script>
    function div_show1(){
      document.getElementById('id01').style.display = "block";
     }
     alert("Registration success, Please Login");
     window.onload = div_show1;
  </script>
<?php } else if($_GET["myval"]==3){ ?>
  <script>
    function div_show2(){
      document.getElementById('id02').style.display = "block";
     }
     alert("Username Already!!!, Please try again");
     window.onload = div_show2;
  </script>
<?php }else if($_GET["myval"]==4){ ?>
  <script>
    function div_show3(){
      document.getElementById('id02').style.display = "block";
     }
     alert("Registration Failed!!!, Please try again");
     window.onload = div_show3;
  </script>
<?php } ?>

<ul>
  <li><a class="active" href="index.php">ระบบการจัดการโรงเรียนบ้านนอกวิทยาคม</a></li>
  <li style="float:right;"><a href="#login" onclick="document.getElementById('id01').style.display='block'">ลงชื่อเข้าใช้</a></li>
  <li style="float:right;"><a href="#register" onclick="document.getElementById('id02').style.display='block'">ลงทะเบียน</a></li>
</ul>

<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="..\myphp\img\slide\1.jpg" style="width:100%">
  <div class="text">โรงเรียนบ้านนอกวิทยาคม</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="..\myphp\img\slide\2.jpg" style="width:100%">
  <div class="text">โรงเรียนบ้านนอกวิทยาคม</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="..\myphp\img\slide\3.jpg" style="width:100%">
  <div class="text">โรงเรียนบ้านนอกวิทยาคม</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active1", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active1";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<div id="id01" class="modal">

  <form class="modal-content animate" action="process.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
      <img src="..\myphp\img\login.png" alt="Avatar" class="avatar">
    </div>
    <div class="container" style="text-align: center;">
      <label><b>ชื่อผู้ใช้</b></label>
      <input type="text" placeholder="ป้อนชื่อผู้ใช้(Username)" name="uname" required><br>

      <label><b>รหัสผ่าน</b></label>
      <input type="password" placeholder="ป้อนรหัสผ่าน" name="psw" required><br>
       <input type="checkbox" checked="checked"> จดจำชื่อผู้ใช้  <br>
      <button type="submit">เข้าสู่ระบบ</button>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">ปิดหน้าต่าง</button>
    </div>
  </form>
</div>
<div id="id02" class="modal" style="text-align: center">
  <form class="modal-content animate" action="register.php" method="POST">
    <div class="imgcontainer">
  	<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close">&times;</span>
  	</div>
    <div class="container">
      <label>ชื่อ</label>
      <input type="text" placeholder="ชื่อของคุณ" name ="txt_name" required><br>
      <label>นามสกุล</label>
      <input type="text" placeholder="นามสกุลของคุณ" name ="txt_lastname" required><br>
      <label>ชื่อผู้ใช้ (Username)</label>
      <input type="text" placeholder="Username ของคุณ" name="username" required><br>

      <label>รหัสผ่าน</label>
      <input type="password" placeholder="รหัสผ่าน" name="password" required><br>

      <label>ยืนยันรหัสผ่าน</label>
      <input type="password" placeholder="ใส่รหัสผ่านอีกครั้ง" name="psw-repeat" required><br>
      <input type="checkbox" checked="checked"> จดจำผู้ใช้งาน<br>

			<div class="clearfix">
        <button type="reset" value="Reset" style="background-color: #F3960F">รีเช็ตข้อมูล</button>
        <button type="submit" class="signupbtn" name="reg_btn">ลงทะเบียน</button>
			</div>
    </div>
  </form>
</div>


</body>
</html>
