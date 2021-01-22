<?php

include('conn.php');

if (isset($_GET['id']))
{
  $id = $_GET['id'];
  $get_books = "select * from books WHERE id = '$id'";

  $run_books = mysqli_query($con, $get_books);
  $row = mysqli_fetch_array($run_books);
  
  $name = $row['name'];
  $image = $row['image'];
  $description = $row['description'];
  $semester = $row['semester'];
  $year = $row['year'];
  $url_download = $row['url_download'];

}else{

  $name = "";
  $image = "";
  $description = "";
  $year = "";
  $semester = "";
  $url_download = "";


}

if(isset($_POST["submit_btn"]))

{ 

  $btn_id = $_GET['id'];
  $name = $_POST['name'];

  if($_FILES['image']['name'] == ""){

    $image = $row['image'];
  
  }

  else {

  $image = $_FILES['image']['name'];
  $image_tmp = $_FILES['image']['tmp_name'];
  move_uploaded_file($image_tmp,"images/$image");
  }

  $description = $_POST['description'];
  $semester = $_POST['semester'];
  $year = $_POST['year'];
  $url_download = $_POST['url_download'];


  $sql = "UPDATE `books` SET `name`='$name',`description`='$description',`image`='$image',`semester`='$semester',`year`='$year',`url_download`='$url_download' WHERE id = '$btn_id'" ;
  $res = mysqli_query($con , $sql);

  if($res){
    echo "<script>alert('Edited Done')</script>";
    echo "<script>window.open('admin_books.php?','_self')</script>";

  }else {
    echo "Failed";
  }
}



?>

<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="../Css/index.css"/>
</head>

<body>
  <br>
  <h2 style="text-align: center;">Edit Book</h2>
  <br>
  <div class="container1">
  <form method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label>Name of Book:</label>
    </div>
    <div class="col-75">
      <input type="hidden" name="id">
      <input type="text" name="name" value="<?php echo $name; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>URL download of Book:</label>
    </div>
    <div class="col-75">
      <input type="text" name="url_download" value="<?php echo $url_download; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Image of Book:</label>
    </div>
    <div class="col-75">
      <input type="file" name="image" value="images/<?php echo $image; ?>">
      <img src="images/<?php echo $image; ?>" width="60" height="60"/>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Semester of Book:</label>
    </div>
    <div class="col-75">
      <input type="text" name="semester" value="<?php echo $semester; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Year of Book:</label>
    </div>
    <div class="col-75">
      <input type="text" name="year" value="<?php echo $year; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Description of Book:</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="description" style="height:200px"><?php echo $description;?></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" name = "submit_btn">
  </div>
  </form>
</div>
</body>
</html>