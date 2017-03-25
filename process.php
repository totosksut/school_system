<?php
  session_start();


  mysql_connect("localhost","root","");
  mysql_select_db("member_db");
  $username = $_REQUEST['uname'];
  $password = $_REQUEST['psw'];

  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);
  $str = "select * from member where username = '$username' and password = '$password'";
  $result = mysql_query($str)
                or die("Fail to query database".mysql_error());
  $num_row = mysql_num_rows($result);
  $row = mysql_fetch_array($result);
  if($num_row == 1){
    $_SESSION['username']=$row['username'];
    $_SESSION['status']=$row['status'];
    if($row['status']=='admin'){
      $x = $row['id'];
      header("Location:admin.php?id=$x");

    }else if($row['status']=='user'){
      $x = $row['id'];
      header("Location:user.php?id=$x");
    }
  }else{
      header("Location:index.php?myval=1");
  }

?>
