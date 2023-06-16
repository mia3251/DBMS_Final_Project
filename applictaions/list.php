<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>
<html>
<head>
<style>


body {
	background-color: white;
}
</style>
</head>
<body>
	<div align="center">
		<legend>托嬰中心列表</legend>
	</div>
	<div align="center">          
	<div style="position: relative; top: 10px;"><h2>嘉義市</h2></div>	

	<iframe src="https://www.google.com/maps/d/u/0/embed?mid=19dfPF4uTZk35je2QPwLd9S1LJz2_xCA&ehbc=2E312F"  style="width:25%; height:200px; position: sticky; top: 10px; left: 80%;"></iframe>
	<?php
	include_once("bc.chia.list.php");
	?>
	
	<div align="center">          
	<div style="position: relative; top:10px;"><h2>彰化縣</h2></div>

	<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1unGTXeNAYZEoOFhCAdtlL1TbGBeVX3o&ehbc=2E312F" style="width:25%; height:200px; position: sticky; top: 10px; left: 80%;"></iframe>
	<?php
		include_once("bc.chung.list.php");
	?>
	
	
			
<?php
   include_once("footer.php");
   include_once("navbar.php");
?>