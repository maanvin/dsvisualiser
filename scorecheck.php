<?php
	session_start();
	
	$servername="localhost";
	$username="root";
	$password="ixi776142";
	$dbname="wtproject";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	$a1=$_GET["Q1"];
	$a2=$_GET["Q2"];
	$a3=$_GET["Q3"];
	$a4=$_GET["Q4"];
	$a5=$_GET["Q5"];

	$score=0;
	
	$query="SELECT ll FROM answers";
	$res=mysqli_query($conn,$query);
	$res2=mysqli_fetch_assoc($res);
	if($res2["ll"]==$a1)
		$score++;
	$res2=mysqli_fetch_assoc($res);
	if($res2["ll"]==$a2) 
		$score++;
	$res2=mysqli_fetch_assoc($res);
	if($res2["ll"]==$a3) 
		$score++;
	$res2=mysqli_fetch_assoc($res);
	if($res2["ll"]==$a4) 
		$score++;
	$res2=mysqli_fetch_assoc($res);
	if($res2["ll"]==$a5)
		$score++;
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>