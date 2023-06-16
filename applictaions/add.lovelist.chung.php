


<?php 

$con = mysqli_connect ('localhost', 'root', '', 'new_insertion');
 if (!$con)
 {
	 echo 'not connected to server';
 }
mysqli_select_db($con, 'new_insertion') or die(mysqli_error($con));
	 

if (isset($_POST['babycenter_id'])) {
  $babycenter_id=$_POST['babycenter_id'];
  $query = "SELECT `機構名稱`, `地址`, `電話`, `核定收托人數` FROM `彰化縣托嬰中心` WHERE `babycenter_id`='$babycenter_id'";

  $result = mysqli_query($con, $query) or die(mysqli_error($connect));
 // $data=array();
  if ($row = mysqli_fetch_array($result)) {
      $data[0] = $row['機構名稱'];
      $data[1] = $row['地址'];
      $data[2] = $row['電話'];
      $data[3] = $row['核定收托人數'];
  }   


	$existing_Query ="SELECT * FROM `我的最愛_彰化縣` WHERE `機構名稱`='$data[0]' OR `地址`='$data[1]' OR `電話`='$data[2]'OR `核定收托人數`='$data[3]'";
	$existing_Result = mysqli_query($con, $existing_Query);
	if(0 < mysqli_num_rows ($existing_Result)){
		echo '<script type="text/javascript">
                      alert("這個托嬰中心已經在我的最愛裡了!");
                         window.location="list.php";
                           </script>';
	} else {
    $insert_Query = "INSERT INTO `我的最愛_彰化縣` (`機構名稱`,`地址`,`電話`,`核定收托人數`) VALUES ('$data[0]', '$data[1]','$data[2]','$data[3]')";
    $insert_Result = mysqli_query($con, $insert_Query);
    if ($insert_Result) {
      echo "<script type='text/javascript'>
                      alert('我的最愛 added successfuly');
                         window.location='love.list.php';
                           </script>";
    } else {
      echo "<script type='text/javascript'>
                      alert('Data not inserted!');
                         window.location='love.list.php';
                           </script>";
    }
  }

  
  }
?>