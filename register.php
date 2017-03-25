<?php 

	mysql_connect("localhost","root","");
	mysql_select_db("member_db");

	$sql='SELECT * FROM  `member` WHERE  `username` =  "'.$_POST["username"].'"';
	$query=mysql_query($sql);
	mysql_query("Set Names UTF8");
	$num=mysql_num_rows($query);
	if($num>=1){
		header("Location:index.php?myval=3");
	}
	else{
		$sql1="INSERT INTO member values ('','".$_POST['txt_name']."','".$_POST['txt_lastname']."','".$_POST['username']."','".$_POST['password']."','user')";
		$query1=mysql_query($sql1);
		if($query1){
			header("Location:index.php?myval=2");
		}
		else{
			header("Location:index.php?myval=4");
		}
	}
?>