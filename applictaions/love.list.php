<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
   include_once("navbar.php");
?>
<html>
<head>
<style>

.flex_container{
	display: flex;
}

.left_box {
  	width: 80%;
  	float: left;
}

.right_box {
  	width: 20%;
  	float: right;
}

body {
	background-color: white;
}
body

</style>
</head>
<body>
	<div align="center">
		<legend>我的最愛-托嬰中心列表</legend>
	</div>
	<div align="center">          
	<div style="position: relative; top: 10px;"><h2>嘉義市</h2></div>	

	<div class="flex_container">
		<div class="left_box">
			<?php
				include_once("lovelist.chia.php");
			?>
		</div>
	</div>
	<div align="center">          
	<div style="position: relative; top:10px;"><h2>彰化縣</h2></div>
	<div class="flex_container">
		<div class="left_box">
			<?php
				include_once("lovelist.chung.php");
			?>
		</div>
	</div>
		
	
			
<?php
   include_once("footer.php");
   include_once("navbar.php");
?>