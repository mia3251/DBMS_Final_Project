<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "header.php";
  include_once("header.php");
  include_once("navbar.php");
  // php select option value from database

  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "new_insertion";

  // connect to mysql database

  $connect = mysqli_connect($hostname, $username, $password, $databaseName);

  // mysql select query
  $query1 = "SELECT * FROM `嘉義市托嬰中心`";
  $query2 = "SELECT * FROM `彰化縣托嬰中心`";

  // for method 1

  $result1 = mysqli_query($connect, $query1);
  $result2 = mysqli_query($connect, $query2);

  // for method 2


  $options = "";

?>
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
        <div class="jumbotron custom-junbotron" align="center">
        <legend>嘉義市托嬰中心 評論區</legend>
        <form class="form-horizontal" method= "post" action = "add.com.chia.php">
            <fieldset>

            <!-- Form Name -->
            

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
        
      <!--Method One-->
      <div class="form-group">
          <label class="col-md-4 control-label" for="機構名稱">機構名稱</label> 
          <div class="col-md-5">
            <select id="機構名稱" name="機構名稱" class="form-control">

              <?php while($row1 = mysqli_fetch_array($result1)):;?>

              <option  value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

              <?php endwhile;?>
              <?php while($row1 = mysqli_fetch_array($result1)):;?>

              <option  value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

              <?php endwhile;?>

            </select>
          </div>      
      </div>
    </body>
</head>
</html>





        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
    <!-- Text input-->
            <div class="form-group">
				  <label class="col-md-4 control-label" for="comment">評論</label>  
				  <div class="col-md-5">
				  <textarea rows="5" cols="20" id="comment" name="comment" type="text" placeholder="" class="form-control input-md" required=""></textarea>
				  </div>
				</div>
        </select>
        <!-- Button -->
                <div class="form-group"  align="right">
                  <label class="col-md-4 control-label" for="submit"></label>
                  <div class="col-md-5">
                    <button id="submit" name="insert" class="btn btn-primary"> Add</button>
                  </div>
                </div>
    </body>



</fieldset>
            </form>
            
        </div>      
    </div>
    </body>
</head>
</html>
<body>

<div align="center">
<br>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <legend>嘉義市托嬰中心評價</legend>
  </fieldset>
  <?php
    include_once("comlist.chia.php");
  ?>
  <div class="container" >
    

  <div class="row" align="center">
    <div class="col-lg-6" style="width:100%">
      <div class="jumbotron">
      <legend>彰化縣托嬰中心 評論區</legend>
      <form class="form-horizontal" method= "post" action = "add.com.chung.php">
          <fieldset>

          <!-- Form Name -->
          

      <meta charset="UTF-8">

      <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        
        
        <!--Method One-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="機構名稱">機構名稱</label> 
            <div class="col-md-5">
        <select  id="機構名稱" name="機構名稱"  class="form-control">

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option  value="<?php echo $row2[1];?>"><?php echo $row2[1];?></option>

            <?php endwhile;?>
            <?php while($row2 = mysqli_fetch_array($result2)):;?>

<option  value="<?php echo $row2[1];?>"><?php echo $row2[1];?></option>

<?php endwhile;?>

        </select>
        
        

        </div>      
    </div>
    </body>
</head>
</html>





        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
    <!-- Text input-->
            <div class="form-group">
				  <label class="col-md-4 control-label" for="comment">評論</label>  
				  <div class="col-md-5">
				  <textarea id="comment" name="comment" type="textarea" rows="5" cols="8" placeholder="" class="form-control input-md" required=""></textarea>
				  </div>
				</div>
        </select>
        <!-- Button -->
                <div class="form-group"  align="right">
                  <label class="col-md-4 control-label" for="submit"></label>
                  <div class="col-md-5">
                    <button id="submit" name="insert" class="btn btn-primary"> Add</button>
                  </div>
                </div>
    </body>



</fieldset>
            </form>
            
        </div>      
    </div>
    </body>
</head>
</html>
<body>
<br>
<div align="center">
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <legend>彰化縣托嬰中心評價</legend></fieldset>
  <?php
    include_once("comlist.chung.php");
  ?>


       
<?php
   include_once("footer.php");
   include_once("navbar.php");
?>