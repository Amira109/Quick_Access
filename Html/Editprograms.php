<?php

include('conn.php');

if (isset($_GET['id']))
{
  $id = $_GET['id'];
  $get_programs = "select * from programs WHERE id = '$id'";

  $run_programs = mysqli_query($con, $get_programs);
  $row = mysqli_fetch_array($run_programs);
  
  $lab_name = $row['lab_name'];
  $program_name = $row['program_name'];
  $url_program = $row['url_program'];
  $install_program = $row['install_program'];
  $year = $row['year'];

}else{

  $lab_name = '';
  $program_name = '';
  $url_program = '';
  $install_program = '';
  $year = '';

}

if(isset($_POST["submit_btn"]))

{ 

  $btn_id = $_GET['id'];
  $lab_name = $_POST['lab_name'];
  $program_name = $_POST['program_name'];
  $url_program = $_POST['url_program'];
  $install_program = $_POST['install_program'];
  $year = $_POST['year'];

  $sql = "UPDATE `programs` SET `lab_name`='$lab_name',`program_name`='$program_name',`url_program`='$url_program',`install_program`='$install_program',`year`='$year' WHERE id = '$btn_id'" ;
  $res = mysqli_query($con , $sql);

  if($res){
    echo "<script>alert('Edited Done')</script>";
    echo "<script>window.open('admin_programs.php?','_self')</script>";

  }else {
    echo "Failed";
  }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="../Css/index.css"/>
</head>

<body>
  <br>
  <h2 style="text-align: center;">Edit Program</h2>
  <br>
  <div class="container1">
  <form method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label>Name of Lab:</label>
    </div>
    <div class="col-75">
      <input type="hidden" name="id">
      <input type="text" name="lab_name" value="<?php echo $lab_name; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Name of Program:</label>
    </div>
    <div class="col-75">
      <input type="text" name="program_name" value="<?php echo $program_name; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>URL Program:</label>
    </div>
    <div class="col-75">
      <input type="text" name="url_program" value="<?php echo $url_program; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Install Program:</label>
    </div>
    <div class="col-75">
      <input type="text" name="install_program" value="<?php echo $install_program; ?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Year:</label>
    </div>
    <div class="col-75">
      <input type="text" name="year" value="<?php echo $year; ?>">
    </div>
  </div>
  <div class="row">
    <input type="submit" name = "submit_btn">
  </div>
  </form>
</div>
</body>
</html>