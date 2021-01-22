<?php 
include('header.html');
include('conn.php');

if (isset($_GET['id'])){
  $id = $_GET['id'];
  $get_articles = "select * from articles WHERE id = '$id'";
  $run_articles = mysqli_query($con, $get_articles);
  $row = mysqli_fetch_array($run_articles);

  $name = $row['Articles_name'];
  $image = $row['Articles_img'];
  $details = $row['Articles_details'];
  $url_articles = $row['url_articles']; }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>articles</title>
  <link rel="stylesheet" href="../Css/bootstrap.min.css" />
  <link rel="stylesheet" href="../Css/articles.css" />
</head>
<body>
    <!--start gold-->
    <div class="gold_img" style="background-image: url('images/<?php echo($image); ?>')"></div>
    <div class="gold_rules">
        <div class="container">
         
            <h4><?php echo $name; ?> </h4>
            <p><?php echo $details; ?></p>
            <h4>To continue reading the article, <a href="<?php echo $url_articles; ?>" target="_blank" >click here</a></h4>
        </div>
    </div>
    <hr>
    <!--end gold-->
    <!--start share-->
        <div class="share">
            <div class="container">
                <div class="like">
                    <h4>share this: </h4>
                        <a href="https://twitter.com"><i class="fab fa-twitter"></i> twiiter</a>
                        <a href="https://facebook.com"><i class="fab fa-facebook"></i> facebook</a>
                        
                </div>
            </div>
        </div>
    <!--end share-->
    <hr>
    <!--start comment-->
    <?php

    if(isset($_POST['submit'])){
    	$comment = $_POST['comment'];
    	$name = $_POST['name'];
    	$email = $_POST['email'];

    	$sql="INSERT INTO `comments`(`Articles_id`, `name`, `email`, `comment`) VALUES ('$id','$name','$email','$comment')";
        $query = mysqli_query($con,$sql);

        if($query){
        	echo "<script>alert('The comment is added')</script>";
            echo "<script>window.open('ArticlesContent.php?id ='.$id,'_self')</script>";
        }
        else {
        	echo "Failed";
        }
    }

    ?>                                                    
        
   <div class="share_repo">
        <div class="container">
            <div class="reply">
              <p>
                 <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                     Add Comment
                 </a>
              </p>
              <div class="collapse" id="collapseExample">
                    <div class="all_share">
                        <div class="container">
                          <form method="post" enctype="multipart/form-data">
                              <div class="col-10 forms">
                                  <input type="text" name="comment" class="form-control" placeholder="write your comment" >
                              </div>

                          <div class="row">
                                <div class="col-md-8">
                                    <p>Fill in the fields below with the appropriate information or click on one of the icons to log in.</p>
                                </div>
                                <div class="col-md-4 row">
                                    <a href="#" class="col-2"><img src="../Picture/facebo.png" ></a>
                                    <a href="#" class="col-2"><img src="../Picture/twiit.png" ></a>
                                    <a href="#" class="col-2"><img src="../Picture/insta.png" ></a>
                                    <a href="#" class="col-2"><img src="../Picture/Gmail_Icon.png" ></a>
                                </div>
                          </div>
                                <div class="form-row" >
                                    <div class="col-10 forms">
                                      <input type="text" name="name" class="form-control" placeholder="full name *">
                                    </div>
                                    <div class="col-10 forms">
                                      <input type="email" name="email" class="form-control" placeholder="email *" >
                                    </div>
                                    <!--
                                    <div class="col-10 forms">
                                      <input type="text" class="form-control" placeholder="website *" >
                                    </div>-->
                                </div>
                                <!-- <div class="form-check">
                                   <input class="form-check-input" type="checkbox" id="gridCheck1">
                                   <label class="form-check-label" for="gridCheck1">
                                      Informed me of new comments via e-mail.
                                   </label>
                                </div>
                                <div class="form-check">
                                   <input class="form-check-input" type="checkbox" id="gridCheck2">
                                   <label class="form-check-label" for="gridCheck1">
                                      Notify me of new posts via e-mail.
                                   </label>
                                </div> -->

                                <button name="submit" class="btn btn-primary">Add comment</button>
                          </form>
                        </div>
                    </div>
              </div>
           </div>
       </div>
   </div>

 <!--end comment-->
 <!--start script js bootstrap -->
 <script src="../JavaScript/jquery.min.js"></script>
 <script src="../JavaScript/popper.min.js"></script>
 <script src="../JavaScript/bootstrap.min.js"></script>
 <script type="text/javascript" src="../JavaScript/index.js"></script>
 <!--end script js bootstrap -->
    <!-- footer -->
    <div class="footer">
        <p> Quick access <br> 2020 &copy; &lt; All &gt; right reserved.</p>
    </div>
</body>
</html>