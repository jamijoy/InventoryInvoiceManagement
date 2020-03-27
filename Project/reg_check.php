<?php

session_start();

$company = "N/A";
$address = "N/A";

if(isset($_REQUEST["company"]))
{
	if($_REQUEST["company"]!="")
	{
		$company = $_REQUEST["company"];
	}
}

if(isset($_REQUEST["address"]))
{
	if($_REQUEST["address"]!="")
	{
		$address = $_REQUEST["address"];
	}
}


$con = mysqli_connect("localhost","root","","inv_management");
$sql = "insert into users values(null,'".$_REQUEST["username"]."','".$_REQUEST["password"]."','user','".$company."','".$address."','".$_REQUEST["phone"]."')";
$rsd = mysqli_query($con,$sql) or die(mysqli_error($con));

header('location:index.html');
?>