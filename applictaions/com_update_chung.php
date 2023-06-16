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
 <br><div class="container">
  <div class="row" align="center">
    <div class="col-lg-6" style="width:100%">
        <div class="jumbotron">
        <form class="form-horizontal" method= "POST" action="com_update_chung.php">
          <fieldset>


          <!-- Form Name -->
          <legend>更新評論</legend>
                
<?php 
    $機構名稱 = '';
    $評價 = '';
  $con = mysqli_connect ('localhost', 'root', '', 'new_insertion');
  if (!$con)
  {
    echo 'not connected to server';
  }
  mysqli_select_db($con, 'new_insertion') or die(mysqli_error($con));
  $comment_id = mysqli_real_escape_string($con, $_POST['comment_id']);

  if (isset($_POST['update'])) {
    $comment_id = mysqli_real_escape_string($con, $_POST['comment_id']);

    $query = "SELECT `機構名稱`, `評價` FROM `彰化縣托嬰中心評價` WHERE `comment_id`='$comment_id'";

    $result = mysqli_query($con, $query) or die(mysqli_error($connect));
  // $data=array();
    if ($row = mysqli_fetch_array($result)) {
      $機構名稱 = $row['機構名稱'];
      $評價 = $row['評價'];
    }   
  }
  else if (isset($_POST['submit'])) {
    $comment_id = mysqli_real_escape_string($con, $_POST['comment_id']);

    $機構名稱 = '';
    $評價 = '';
    $評價 = $_POST['評論'];
    $update_Query = "UPDATE `彰化縣托嬰中心評價` SET `評價` = '$評價' WHERE `comment_id`='$comment_id'";
    $update_Query = mysqli_query($con, $update_Query);
    if ($update_Query) {
      echo "<script type='text/javascript'>
                      alert('成功更新評論!');
                         window.location='comment.php';
                        
                           </script>";
    } else {
      echo "<script type='text/javascript'>
                      alert('無法更新評論!');
                         window.location='comment.php';
                           </script>";
   }
  }

?>
          <!-- Text input-->
          <div class="form-group" align="right">
            <label class="col-md-4 control-label" for="機構名稱">機構名稱</label>  
            <div class="col-md-5">
              <input type="機構名稱" class="form-control input-md" id="機構名稱" name="機構名稱" value="<?php echo $機構名稱;?>" placeholder="Disabled input" aria-label="Disabled input example" disabled>
            </div>
          </div>
          <br>

          <!-- Text input-->
          <div class="form-group" align="right">
            <label class="col-md-4 control-label" for="評論">評論</label>  
            <div class="col-md-5">
             <textarea type="評論" class="form-control input-md" id="評論" name="評論"><?php echo $評價;?></textarea>
            </div>
          </div>
          
          <!-- Button -->
          <div class="form-group"  align="right">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-5">
              <button id="submit" name="submit" class="btn btn-primary"> Update </button>
              <input type="hidden" name="comment_id" value="<?php echo $comment_id; ?>">
            </div>
          </div>

          </fieldset>
          </form>
        </div>      
    </div>


<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "footer.php";
   include_once("footer.php");
   include_once("navbar.php");
?>