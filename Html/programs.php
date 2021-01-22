
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRAMS</title>
    <link rel="stylesheet" href="../Css/programs.css">

</head>
<body>
<?php include('header.html'); 
include('conn.php');?>
    
<div id="programs" style="background-image:url(../Picture/p2.png) ;padding-top: 80px; ">
    <div style="background-image: url(../Picture/p1.jpg) ;">
        <p class="start_p" >This section will be devoted to the necessary software for the course material,
            and we will work hard to provide the educational videos and easy ways to download them .</p>
    </div>
    <h1> Second Level </h1> 
    
    <?php

    $get_programs = "SELECT * FROM `programs` WHERE year = 2";

    $run_programs = mysqli_query($con, $get_programs);
    
    while ($row = mysqli_fetch_array($run_programs)){

        $lab_name = $row['lab_name'];
        $program_name = $row['program_name'];
        $url_program = $row['url_program'];
        $install_program = $row['install_program'];
        ?>

    <div class="java">
        <h3><?php echo $lab_name; ?></h3>
        <h4><?php echo $program_name; ?></h4>
        <a href="<?php echo $url_program; ?>" target="_blank">&#128270;</a>
        <a href="<?php echo $install_program; ?>" target="_blank">install</a>
    </div>
    <br>
    <?php  } ?>
    <h1> Third Level </h1> 
    
    <?php

    $get_programs = "SELECT * FROM `programs` WHERE year = 3";

    $run_programs = mysqli_query($con, $get_programs);
    
    while ($row = mysqli_fetch_array($run_programs)){

        $lab_name = $row['lab_name'];
        $program_name = $row['program_name'];
        $url_program = $row['url_program'];
        $install_program = $row['install_program'];
        ?>

    <div class="signals">
        <h3><?php echo $lab_name; ?></h3>
        <h4><?php echo $program_name; ?></h4>
        <a href="<?php echo $url_program; ?>" target="_blank">&#128270;</a>
        <a href="<?php echo $install_program; ?>" target="_blank">install</a>
    </div>
    <br>
    <?php  } ?>
    <h1> Fourth Level </h1> 
    
    <?php

    $get_programs = "SELECT * FROM `programs` WHERE year = 4";

    $run_programs = mysqli_query($con, $get_programs);
    
    while ($row = mysqli_fetch_array($run_programs)){

        $lab_name = $row['lab_name'];
        $program_name = $row['program_name'];
        $url_program = $row['url_program'];
        $install_program = $row['install_program'];
        ?>

    <div class="signals">
        <h3><?php echo $lab_name; ?></h3>
        <h4><?php echo $program_name; ?></h4>
        <a href="<?php echo $url_program; ?>" target="_blank">&#128270;</a>
        <a href="<?php echo $install_program; ?>" target="_blank">install</a>
    </div>
    <br>
    <?php  } ?>
    <h1> Fifth Level </h1> 
    
    <?php

    $get_programs = "SELECT * FROM `programs` WHERE year = 5";

    $run_programs = mysqli_query($con, $get_programs);
    
    while ($row = mysqli_fetch_array($run_programs)){

        $lab_name = $row['lab_name'];
        $program_name = $row['program_name'];
        $url_program = $row['url_program'];
        $install_program = $row['install_program'];
        ?>

    <div class="signals">
        <h3><?php echo $lab_name; ?></h3>
        <h4><?php echo $program_name; ?></h4>
        <a href="<?php echo $url_program; ?>" target="_blank">&#128270;</a>
        <a href="<?php echo $install_program; ?>" target="_blank">install</a>
    </div>
    <br>
    <?php  } ?>
</div>
    <!-- footer -->
    <div class="footer">
        <p> Quick access <br> 2020 &copy; &lt; All &gt; right reserved.</p>
    </div>

</body>
</html>