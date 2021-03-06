<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home Page </title>
    <link rel="stylesheet" href="../Css/index.css"/>
    <!-- for footer -->

    <!-- Load icon search library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<!-- header,main,footer -->
<body>

    <?php include('header.html'); ?>
    <main style="padding-top: 80px; ">
        
        <section > 
            <!-- Main slider block-->
           <!-- Slideshow container -->
            <div class="slideshow-container" >

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                <div class="numberText">1 / 3</div>
                <img src="../Picture/forslider1.jpg" style="width: 100%; height: 500px;">
                </div>
            
                <div class="mySlides fade">
                <div class="numberText">2 / 3</div>
                <img src="../Picture/img13.jpg" style="width:100%; height: 500px;">
                </div>
            
                <div class="mySlides fade">
                <div class="numberText">3 / 3</div>
                <img src="../Picture/forslider3.jpg" style="width:100% ;height: 500px;">
                </div>
            
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>


            </div>   
        </section>

     



        <section>
            <div id="container">

                <div class="contain">
                    <h2>Are you interested in computer engineering but  you don’t know how to start? </h2>
                    <br>
                    <h3>Are you a computer engineering student who is struggling to find books related to your major?</h3>
                    <br>
                    <p id="parag">
                        <h4>You came to the right place. </h4>
                        <br>
                        We have suffered this before, and we don’t want you to suffer it too.
                        Therefore, we created this blog to help you with your studying path.<br> 
                        Our blog provides you with all books, articles and exercises from level one until your graduation, 
                        Quick access is your fastest way to reaching these files and much more , it is created by a group of students in the Islamic University of Gaza.
                        <br> <br>
                        Quick access does not  require a login, and We target all those interested
                         in the computer engineering field, No matter where you are and who you are, you can access us quickly.
                    </p>
                </div>

            <div class="containImg">
                    <img src="../Picture/pictureForP2.jpg" height="400px"  width=" 500px" >

            </div>
        </div>

        </section>
   
    </main>

    <!-- footer -->
    <div class="footer">
        <p> Quick access <br> 2020 &copy; &lt; All &gt; right reserved.</p>
    </div>
          

    <script type="text/javascript" src="../JavaScript/index.js"></script>
</body>

</html>