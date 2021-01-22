<?php
include('conn.php');

if(isset($_POST["submit_btn"])){
  
  $lab_name = $_POST['lab_name'];
  $program_name = $_POST['program_name'];
  $url_program = $_POST['url_program'];
  $install_program = $_POST['install_program'];
  $year = $_POST['year'];

  $sql = "INSERT INTO programs (lab_name,program_name,url_program,install_program,year) VALUES ('" . $lab_name. "', '" . $program_name. "','" . $url_program. "', '" . $install_program. "','" . $year. "')";

  $res = mysqli_query($con , $sql);

  if($res){

    echo "<script>alert('The Program is added')</script>";
    echo "<script>window.open('admin_programs.php?','_self')</script>";
  } else {
    echo "Failed";
  }
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../Css/index.css"/>
  <title>Add Programs</title>
</head>

<body>
  <header>
    <ul class="nav" >
      <li><a href="index.php"><img  id="logo" src="../Picture/logo.jpg" width="140px" height="79px" alt="logo" title="site logo" ></a></li>
      <li><a href="admin_articles.php">Admin Articles</a></li>
      <li><a href="admin_books.php">Admin Books</a></li>
      <li><a href="admin_programs.php">Admin Programs</a></li>
      <li><a href="admin_solbooks.php">Admin Solution Books</a></li>
    </ul>
  </header>
  <br>
  <h2 style="text-align: center;">Add Program</h2>
  <p></p>
<br>
<div class="container">
  <form method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="fname">Lab Name:</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="lab_name" placeholder="Add Lab Name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Program Name:</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="program_name" placeholder="Add Program Name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">URL Program:</label>
    </div>
    <div class="col-75">
      <input type="text" name="url_program" placeholder="Add URL Program..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Install Program:</label>
    </div>
    <div class="col-75">
      <input type="text" name="install_program" placeholder="Add Install Program..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Year:</label>
    </div>
    <div class="col-75">
      <input type="text" name="year" placeholder="Add Year..">
    </div>
  </div>
  <div class="row">
    <input type="submit" name = "submit_btn">
  </div>
  </form>
</div>

</body>
</html>