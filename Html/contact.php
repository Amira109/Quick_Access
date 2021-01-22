<?php 

include('header.html');
include('conn.php');

if(!empty($_POST["send"])) {

    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $content = $_POST["content"];

    $sql = "INSERT INTO contact (user_name, user_email,content) VALUES ('" . $name. "', '" . $email. "','" . $content. "')";
   
    if(mysqli_query($con, $sql)){
   
    echo "<script>alert('Your contact information is saved successfully.')</script>";
    echo "<script>window.open('contact.php?','_self')</script>";
  } else {
    echo "Failed";
}
}
?>
<!-- end header -->
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Css/contact.css" />
</head>

<body>
    <div class="contact">
        <div class="container">
            <div class="contactInfo">
            </div>
            <div class="contactForm">
                 <form method="post" action="" enctype="multipart/form-data">
                    <h3>Send Message</h3>
                    <div class="inputBox">
                        <input type="text" name="userName" required="required">
                        <span>full Name</span>
                    </div>

                    <div class="inputBox">
                        <input type="email" name="userEmail" required="required">
                        <span>Email</span>
                    </div>

                    <div class="inputBox">
                        <textarea name="content" required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>

                    <div class="send">
                         <button id="print" name="send" value="Send">Send Message</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footer">
        <p> Quick access <br> 2020 &copy; &lt; All &gt; right reserved.</p>
    </div>



</body>

</html>