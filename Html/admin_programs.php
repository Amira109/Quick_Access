<?php

include("conn.php");
  
if (isset($_GET['deleted_id']))
{

  $id = $_GET['deleted_id'];

  // delete the entry

  $result = mysqli_query($con,"DELETE FROM programs WHERE id='$id'") or die(mysql_error());

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../Css/index.css"/>
  <title>Admin programs</title>
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
<form method="POST" action = "<?php $_PHP_SELF ?>">
  <div>
    <div>

      <div><br><h2 style="text-align: center;">Programs</h2><br></div>
      <a href="Addprograms.php"><i style="font-weight: bold;"> add </i></a>
    </div>
    <div>
      <table id="customers">
        <tr>
          <th>Lab name</th>
          <th>Program name</th>
          <th>URL Program</th>
          <th>How To Install</th>
          <th>Year</th>
          <th>Options</th>
        </tr>

        <?php

        $get_programs = "SELECT * FROM `programs` WHERE 1";

        $run_programs = mysqli_query($con, $get_programs);
            
        while ($row = mysqli_fetch_array($run_programs)){

          $id = $row['id'];  
          $lab_name = $row['lab_name'];
          $program_name = $row['program_name'];
          $url_program = $row['url_program'];
          $year = $row['year'];
          $install_program = $row['install_program'];
          ?>

          <tr>
            <td><?php echo $lab_name; ?></td>
            <td><?php echo $program_name; ?></td>
            <td><?php echo $url_program; ?></td>
            <td><?php echo $install_program; ?></td>
            <td><?php echo $year; ?></td> 
            <td>
              <a href="Editprograms.php?id=<?php echo $row["id"]; ?>" rel="tooltip" name="id"><i>edit</i></a>
              <a href="admin_programs.php?deleted_id=<?php echo $row["id"]; ?>"onclick="return confirm('Are you sure?')" rel="tooltip" name="deleted_id" value="delete"><i>delete</i></a>  
            </td>                
          </tr>
        <?php }  ?>
      </table>
    </div>
  </div>                  
</form>
</body>
</html>
