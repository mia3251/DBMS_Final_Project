<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "header.php";
   include_once("header.php");
?>
<html>
<head>
<style>

body {
	background-image: url();
	background-color: white;
}
</style>
</head>

<body>

	<nav class="navbar navbar-default navbar-static-top">
	  <div class="container">
	  <h3>托嬰小幫手</h3>
	  </div>
	</nav>
	
	<div class="content">
		<div class="form">
		<form class="form-horizontal" method="post" action="login.php">
			<fieldset>

			<legend align="center">登入帳號</legend>

			
			<br><div class="form-group">
			  <label class="col-md-4 control-label" for="username">使用者名稱</label>  
			  <div class="col-md-5">
			  <input id="username" name="username" type="text" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			
			<div class="form-group">
			  <label class="col-md-4 control-label" for="password">密碼</label>
			  <div class="col-md-5">
				<input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
				
			  </div>
			</div>

			
			<div class="form-group" align="right">
			  <label class="col-md-4 control-label" for="login"></label>
			  <div class="col-md-5">
				<input type="submit" name="lgn" class="btn btn-success " value="Login">
			  </div>
			</div>

			</fieldset>
		</form>
		</div>
	

		<br><font color="grey">還沒有帳號?</font> <a href="Register.php">點此註冊</a>
		</div>
	</div>
</body>
</html>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
?>