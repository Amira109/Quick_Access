<head>
<title>Search Results</title>
<link rel="stylesheet"  type="text/css" href="../Css/programs.css">
</head>
<body>
    <?php
    include("conn.php");
    include('header.html');                        
    ?>
    <div style="margin: 0px 30px;">
    <?php
if(isset($_GET['search_text'])){

    $search_query = $_GET['search_text'];
    
    $get_books = "SELECT * FROM `books` WHERE name like '%$search_query%' UNION SELECT * FROM `sol_books` WHERE name like '%$search_query%'";

    $run_books = mysqli_query($con, $get_books);

    $num_rows_books = mysqli_num_rows($run_books);

    ?>
    <h1 style="padding-top: 100px;">Book Search Results</h1>

    <?php 

    if($num_rows_books === 0){

        echo '<div style = "margin-left: 150px;"><h4> No Result Found </h4></div>';

    }

        while($row = mysqli_fetch_array($run_books)){

            $id = $row['id'];  
            $name = $row['name'];
            $image = $row['image'];
            $description = $row['description'];
            $semester = $row['semester'];
            $year = $row['year'];
            $url_download = $row['url_download'];
            ?>
<div class="gallery2-cont">
    <br/>
    <div class="gallery2">
        <div class="gallery-imag">
            <img id="imgsol1" src="images/<?php echo $image ?>" alt="Cinque Terre" width="250px" height="270px">
        </div>
        <div> <h2><?php echo $name; ?></h2> 
            <p><?php echo $description; ?></p> 
            <button id="button" onclick="location.href='<?php echo $url_download; ?>'"> download</button>
        </div>
    </div>
</div>
<?php }}?>
<hr>
<?php 
if(isset($_GET['search_text'])){

    $search_query = $_GET['search_text'];
    
    $get_programs = "SELECT * FROM `programs` WHERE lab_name like '%$search_query%' or program_name like '%$search_query%'";

    $run_programs = mysqli_query($con, $get_programs);

    $num_rows_programs = mysqli_num_rows($run_programs);

    ?>

    <h1>Lab Search Results</h1>

    <?php

    if($num_rows_programs === 0){

        echo '<div style = "margin-left: 150px;"><h4>No Result Found</h4></div>';

    }

    while($row = mysqli_fetch_array($run_programs)){

        $lab_name = $row['lab_name'];
        $program_name = $row['program_name'];
        $url_program = $row['url_program'];
        $install_program = $row['install_program'];
    
        ?>

        <div class="java">
            <h3 style="color: #090985;"><?php echo $lab_name; ?></h3>
            <h4><?php echo $program_name; ?></h4>
            <a href="<?php $url_program; ?>"  target="_blank">&#128270;</a>
            <a href="<?php echo $install_program; ?>" target="_blank">install</a>
        </div><br>
    <?php
    } }

    ?>
</div>
<div class="footer">
    <p> Quick access <br> 2020 &copy; &lt; All &gt; right reserved.</p>
</div>
</div>
</body>
</html>