<?php
include('conn.php');

if(isset($_POST["submit_btn"])){
  
  $name = $_POST['name'];
  $image = $_FILES['image']['name']; 
  $image_tmp = $_FILES['image']['tmp_name'];
  move_uploaded_file($image_tmp,"images/$image");
  $description = $_POST['description'];
  $semester = $_POST['semester'];
  $year = $_POST['year'];
  $url_download = $_POST['url_download'];

  $sql = "INSERT INTO sol_books (name, description,image,semester,year,url_download) VALUES ('" . $name. "', '" . $description. "','" . $image. "', '" . $semester. "','" . $year. "','" . $url_download. "')";

  $res = mysqli_query($con , $sql);

  if($res){

    echo "<script>alert('The Solution Book is added')</script>";
    echo "<script>window.open('admin_solbooks.php?','_self')</script>";
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
  <title>Add Solution Books</title>
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
<h2 style="text-align: center;">Add Solutions Book</h2>
<p></p>
<br>
<div class="container">
  <form method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="fname">Solution Book name:</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="name" placeholder="Add Solution Book name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Solution Book URL:</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="url_download" placeholder="Add Solution Book URL..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Solution Book Year:</label>
    </div>
    <div class="col-75">
      <input type="text" name="year" placeholder="Add Solution Book Year..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Solution Book Semester:</label>
    </div>
    <div class="col-75">
      <input type="text" name="semester" placeholder="Add Solution Book Semester..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Image Solution Book:</label>
    </div>
    <div class="col-75">
      <input type="file" name="image">    
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Solution Book Description:</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="description" placeholder="Write Description of Solution Book.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" name = "submit_btn">
  </div>
  </form>
</div>

</body>
</html>