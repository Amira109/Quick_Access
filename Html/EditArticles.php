<?php

include('conn.php');

if (isset($_GET['id']))
{
  $id = $_GET['id'];
  $get_articles = "select * from articles WHERE id = '$id'";

  $run_articles = mysqli_query($con, $get_articles);
  $row = mysqli_fetch_array($run_articles);
  
  $name = $row['Articles_name'];
  $image = $row['Articles_img'];
  $details = $row['Articles_details'];
  $url_articles = $row['url_articles'];

}else{

  $name = "";
  $image = "";
  $details = "";
  $url_articles = "";

}

if(isset($_POST["submit_btn"]))

{ 

  $btn_id = $_GET['id'];
  $name = $_POST['name'];

  if($_FILES['image']['name'] == ""){

    $image = $row['Articles_img'];
  
  }

  else {

  $image = $_FILES['image']['name'];
  $image_tmp = $_FILES['image']['tmp_name'];
  move_uploaded_file($image_tmp,"images/$image");
  }

  $details = $_POST['details'];
  $url_articles = $_POST['url_articles'];

  $sql = "UPDATE `articles` SET `Articles_name`='$name',`Articles_details`='$details',`Articles_img`='$image',`url_articles`='$url_articles' WHERE id = '$btn_id'" ;
  $res = mysqli_query($con , $sql);

  if($res){
    echo "<script>alert('Edited Done')</script>";
    echo "<script>window.open('admin_articles.php?','_self')</script>";

  }else {
    echo "Failed";
  }
}



?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../Css/index.css"/>
  <title>Edit articles</title>
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
  <h2 style="text-align: center;">Edit Article</h2>
  <br>
  <div class="container1">
  <form method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label>Name of Article:</label>
    </div>
    <div class="col-75">
      <input type="hidden" name="id">
      <input type="text" name="name" value="<?php echo $name; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Article URL:</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="url_articles" value="<?php echo $url_articles; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Image of Article:</label>
    </div>
    <div class="col-75">
      <input type="file" name="image" value="images/<?php echo $image; ?>">
      <img src="images/<?php echo $image; ?>" width="60" height="60"/>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Article Details:</label>
    </div>
    <div class="col-75">
      <textarea name="details" style="height: 200px"><?php echo $details;?></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" name = "submit_btn">
  </div>
  </form>
</div>
</body>
</html>