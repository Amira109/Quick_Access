<?php

include("conn.php");
  
if (isset($_GET['deleted_id']))
{

  $id = $_GET['deleted_id'];

  // delete the entry

  $result = mysqli_query($con,"DELETE FROM sol_books WHERE id='$id'") or die(mysql_error());

}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../Css/index.css"/>
  <title>Admin solution books</title>
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
      <div><br><h2 style="text-align: center;">Solution Books</h2><br></div>
      <a href="AddSolBooks.php"><i style="font-weight: bold;"> add </i></a>
    </div>
    <div>
      <table id="customers">
        <tr>
          <th>Solution Books name</th>
          <th>Solution Books image</th>
          <th>Solution Books year</th>
          <th>Solution Books semester</th>
          <th>Solution Books Details</th>
          <th>Solution Books URL</th>
          <th>Options</th>
        </tr>
        
        <?php

        $get_books = "SELECT * FROM `sol_books` WHERE 1";

        $run_books = mysqli_query($con, $get_books);
            
        while ($row = mysqli_fetch_array($run_books)){

          $id = $row['id'];  
          $name = $row['name'];
          $image = $row['image'];
          $description = $row['description'];
          $year = $row['year'];
          $semester = $row['semester'];
          $url_download = $row['url_download'];
          ?> 
          <tr>
            <td><?php echo $name; ?></td>
            <td><img src="images/<?php echo $image;?>" width="60" height="60" alt= "<?php echo $name; ?>"/></td>
            <td><?php echo $year; ?></td>
            <td><?php echo $semester; ?></td>
            <td><?php echo $description; ?></td>
            <td><?php echo $url_download; ?></td>
            <td>        
              <a href="EditSolBooks.php?id=<?php echo $row["id"]; ?>" rel="tooltip" name="id"><i>edit</i></a>
              <a href="admin_solbooks.php?deleted_id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure?')" rel="tooltip" name="deleted_id" value="delete"><i>delete</i></a>  
            </td>                
          </tr>
        <?php  }  ?>
		  </table>
    </div>
  </div>                  
</form>
</body>
</html>
