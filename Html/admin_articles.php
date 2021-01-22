<?php

include("conn.php");

if (isset($_GET['deleted_id']))
{

  $id = $_GET['deleted_id'];

  // delete the entry

  $result = mysqli_query($con,"DELETE FROM articles WHERE id='$id'") or die(mysql_error());

}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../Css/index.css"/>
  <title>Admin articles</title>
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
      <div><br><h2 style="text-align: center;">Articles</h2><br></div>

      <a href="AddArticles.php"><i style="font-weight: bold;"> add </i></a>
    </div>
    <div>
      <table id="customers">
        <tr>
          <th>Aricles name</th>
          <th>Articles image</th>
          <th>Articles Details</th>
          <th>Articles URL</th>
          <th>Options</th>
        </tr>
        
        <?php

        $get_articles = "SELECT * FROM `articles` WHERE 1";

        $run_articles = mysqli_query($con, $get_articles);
        
        while ($row = mysqli_fetch_array($run_articles)){

          $id = $row['id'];  
          $name = $row['Articles_name'];
          $image = $row['Articles_img'];
          $details = $row['Articles_details'];
          $url_articles = $row['url_articles'];
          ?> 
          <tr>
            <td><?php echo $name; ?></td>
            <td><img src="images/<?php echo $image;?>" width="60" height="60" alt= "<?php echo $name; ?>"/></td>
            <td><?php echo $details; ?></td>
            <td><?php echo $url_articles; ?></td>
            <td><a href="EditArticles.php?id=<?php echo $id; ?>" rel="tooltip" name="id"><i>edit</i></a>
              <a href="admin_articles.php?deleted_id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure?')" rel="tooltip" name="deleted_id" value="delete"><i>delete</i>
              </a>  
            </td>                
          </tr>
        <?php }  ?>
      </table>
    </div>
  </div>                  
</form>
</body>
</html>