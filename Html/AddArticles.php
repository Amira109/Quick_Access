<?php
include('conn.php');

if(isset($_POST["submit_btn"])){
  
  $name = $_POST['name'];
  $image = $_FILES['image']['name']; 
  $image_tmp = $_FILES['image']['tmp_name'];
  move_uploaded_file($image_tmp,"images/$image");
  $details = $_POST['description'];
  $url_articles = $_POST['url_download'];

  $sql = "INSERT INTO articles (Articles_name, Articles_details,Articles_img,url_articles) VALUES ('" . $name. "', '" . $details. "','" . $image. "','" . $url_articles. "')";

  $res = mysqli_query($con , $sql);

  if($res){

    echo "<script>alert('The article is added')</script>";
    echo "<script>window.open('admin_articles.php?','_self')</script>";
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
  <title>Add articles</title>
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
<h2 style="text-align: center;">Add Article</h2>
<p></p>
<br>
<div class="container1">
  <form method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="fname">Article Name:</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="name" placeholder="Add Article name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Article URL:</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="url_download" placeholder="Add Article URL..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Article Image:</label>
    </div>
    <div class="col-75">
      <input type="file" name="image">    
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Article Details:</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="description" placeholder="Write Description of Article.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" name = "submit_btn">
  </div>
  </form>
</div>

</body>
</html>