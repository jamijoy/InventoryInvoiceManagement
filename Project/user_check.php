<?php
	session_start();
	
	
	$con = mysqli_connect("localhost","root","","inv_management");
	$sql = "select * from users where contact=".$_REQUEST["phone"]."";
	$rsd = mysqli_query($con,$sql) or die(mysqli_error($con));

	while($row = mysqli_fetch_assoc($rsd))
	{
		$temp["userid"]=$row["userid"];
		$temp["username"]=$row["username"];
		$temp["password"]=$row["password"];
		$temp["type"]=$row["type"];
		$temp["address"]=$row["address"];
		$temp["contact"]=$row["contact"];
		$data[]=$temp;
	}

	if($_REQUEST["phone"]==$data[0]["contact"] && $_REQUEST["password"]==$data[0]["password"])
	{
		$_SESSION["userid"]=$data[0]["userid"];
		$_SESSION["username"]=$data[0]["username"];
		$_SESSION["type"]=$data[0]["type"];
		$_SESSION["address"]=$data[0]["address"];
		$_SESSION["contact"]=$data[0]["contact"];
		
		header("Location:bf_home.php");
	}
	else
	{
		$_SESSION["msg"]="Wrong Credential!!";
		header("Location:index.html");
		//echo $_REQUEST["phone"]." >> ".$_REQUEST["password"];
	}
?>