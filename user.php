<!DOCTYPE html>
<html>
<title>::System of Create By Toto::</title>
<head>
	<link rel="stylesheet" href="..\myphp\style\styles.css">
</head>
<body>

<div class="slideshow-container">
	<?php
		mysql_connect("localhost","root","");
	  mysql_select_db("member_db");
		$id = $_REQUEST['id'];
		$id = stripcslashes($id);
		$id = mysql_real_escape_string($id);
		$str = "select * from member where id = '$id'";
		mysql_query("Set Names UTF8");
		$result = mysql_query($str)
	                or die("Fail to query database".mysql_error());
	  $num_row = mysql_num_rows($result);
	  $row = mysql_fetch_array($result);
		if($num_row != 1){
			echo "error";
		}else{?>
			<h2><?php echo $row['status'];?></h2>
		<?php } ?>
</div>

<ul>
  <li><a href="#news">ตารางเรียน</a></li>
  <li><a href="#contact">ตารางสอบ</a></li>
  <li><a href="#about">ผลการศึกษา</a></li>
	<li><a href="#">คะแนนสอบ</a></li>
  <li style="float:right;"><a href="index.php">ออกจากระบบ</a></li>
	<li style="float:right;"><a class="active" href="#home"><?php echo $row['name']," ",$row['lasname']; ?></a></li>
</ul>

</body>
</html>
