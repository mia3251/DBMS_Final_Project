<?php 

$con = mysqli_connect ('localhost', 'root', '', 'new_insertion');
 if (!$con)
 {
	 echo 'not connected to server';
 }
mysqli_select_db($con, 'new_insertion') or die(mysqli_error($con));
	 
$Comment = $_POST['comment'];

function getPosts() {
  $posts = array();
  $posts[0] = $_POST['機構名稱'];
  return $posts;
}


if (isset($_POST['insert'])) {
	
	$data = getPosts();

	$existing_Query ="SELECT * FROM `嘉義市托嬰中心評價` WHERE `機構名稱`='$data[0]' OR `評價`='$Comment' ";
	$existing_Result = mysqli_query($con, $existing_Query);
	/*if(0 < mysqli_num_rows ($existing_Result)){
		echo '<script type="text/javascript">
                      alert("your entry is already in the tale/list. please enter new comment.");
                         window.location="comment.php";
                           </script>';
	} 
  else {*/
    $insert_Query = "INSERT INTO `嘉義市托嬰中心評價` (`機構名稱`,`評價`) VALUES ('$data[0]', '$Comment')";
    $insert_Result = mysqli_query($con, $insert_Query);
    if ($insert_Result) {
      echo "<script type='text/javascript'>
                      alert('成功新增評論!');
                         window.location='comment.php';
                           </script>";
    } else {
      echo "<script type='text/javascript'>
                      alert('無法新增評論!');
                         window.location='comment.php';
                           </script>";
    }
  }

  
  // }
?>