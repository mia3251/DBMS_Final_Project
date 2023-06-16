<?php
session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];
 
  if ($username&&$password)
  {
	 $connect = mysqli_connect("localhost", "root", "")or die("無法連接到資料庫!");
	 mysqli_select_db($connect,"new_insertion") or die ("資料庫不存在!");
	 
	 $query = mysqli_query($connect,"SELECT * FROM admin WHERE username='$username'");
	 
	 $numrows = mysqli_num_rows($query);
	 
	 if($numrows!==0)
	 {
		 while($row = mysqli_fetch_assoc($query))
		 {
			 $dbusername = $row['username'];
			 $dbpassword = $row['password'];
		 }
		 if ($username==$dbusername&&($password)==$dbpassword)
		 {
			  echo '<script type="text/javascript">
                      alert("歡迎登入!");
                         location="home.php";
                           </script>';
			 $_SESSION['username'] = $username;
		 }
		 else
			 echo '<script type="text/javascript">
                      alert("密碼錯誤!");
                         location="index.php";
                           </script>';
	 }	 
	 else
         die('<script type="text/javascript">
                      alert("使用者不存在!");
                         location="index.php";
                           </script>');		 
	  
  }
  else 
	  die('<script type="text/javascript">
                      alert("請輸入使用者帳號及密碼!");
                         location="index.php";
                           </script>');
  
	  	 
?>
