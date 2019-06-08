<?php
include('header.php');
?>
<style>
	.box{
	margin-top:50px;
	margin-left:40px;
	background-color:#020202;
	font-family:Times New Roman;
	opacity:.7;
	color:#ffffff;
	padding:30px;
	font-size:25px;
	width:20%;
	border-radius:20px;
}
.box input[type="password"]{
	border:1 solid black;
	font-color:black;
	font-family:Times New Roman;
	border-radius:5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;	
}
.box input[type="text"]{
	border:1 solid black;
	font-color:black;
	font-family:Times New Roman;
	border-radius:5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
}
.box input[type="SUBMIT"]{
	width:150px;
	height:40px;
	border:0;
	border-radius:5px;
	font-family:Times New RomanS;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	background-color: skyblue;
}

.box input[type="button"]{
	width:200px;
	height:30px;
	border:0;
	font-family:Times New Roman;
	border-radius:5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	background-color:#d3bed8 ;
}
.box a{
	text-decoration:none;
	font-family:Times New Roman;
	color:#ffffff;
}
</style>
	<div class="box" Align="center">
<div align="center">
<img src="pic/l.jpg"height="100px;" ></div>
<div>Students  Login</div>
<hr>
<br>
	<form method="post" action="" >
		<table>
			<tr><td style="color:#ffffff; font-family:Times New Roman; font-size:25px;">User Id</td></tr><tr><td><input type="text" name='userid'></td></tr>
			<tr><td style="color:#ffffff; font-family:Times New Roman; font-size:25px; ">Password </td></tr><tr><td><input type="password" name='pass'></td></tr>
			</table>
			<input type="hidden" value="intput given" name='login'>
			<tr><td><h2 align="center"><input name="SUBMIT" type="SUBMIT" value="Log in"></h2></td></tr>
	</form>
<hr>
<a href="admin.php"><input type="button" value="admin login" style="width:100px;"></a><br>
<hr>
</div>