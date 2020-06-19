<!DOCTYPE HTML>

<?php
    include 'map/sec.php';                  //Include File
    $sec_id = $_GET['id'];                   //Get Course Name
    if($sec_id=='a' || $sec_id == 'b')
        $true = 1;
    else{
        header("HTTP/1.0 404 Not Found");
        echo "<h1>404 Not Found</h1>";
        echo "The Section that you have requested could not be found.";
        exit();
    }
    $sec_name = $sec_map[$sec_id];     //Student Name
    $stu_names = $stu_map[$sec_id];
?>

<html>

<head>

<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>

<title>
        DTU-IT Yearbook 2020 - <?= $sec_name ?>     
    
</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">         <!..CSS.!>
    <link rel="stylesheet" type="text/css" href="css/scroll.css">

<meta charset="utf-8">
</head>


<body>


    <a href = "index.php">
        <img src = "data/homebutton.png" width = 50 height = 50 style="position:fixed;right:40px;" alt="Home" title="Home" >
    </a>
                                                                 <!.Homebutton.>
    <a href = "index.php"><img src = "data/logo1.png" width = "100" height = "100" align=left ></a>                   <!.Applogo.!>
    
    <br><br><br><br><br><br><br><br><br><br><hr>

    <h1 id='course_name' align=center><font color=black size =8px ><?= $sec_name ?> <!.Course Name.!>
        </h1>   </font> 

    <h3 align=center><font color = black size=6px>Students</font></h3>   <!.Student id.!>

    <ul id='lectures'>

<hr>

<?php 
    // $files = glob('sect/'. $sec_id . '/*.{txt,pdf,doc}', GLOB_BRACE);        //Allowed Files
    for ($stu_no = 1; $stu_no <= count($stu_names); $stu_no++) {
        $stu_name = $stu_names[$stu_no];                    
            echo "<li><font color = black size = 5px> <a href='wall.php?sec=$sec_id&stu=$stu_no'>".
            "Student $stu_no - $stu_name</a></font></li>\n";
    }
?>

<hr>
    </ul>

    <hr>

<div id = "sitemap" style="line-height:4px">
<p style="margin-top:5px"> Sitemap </p>     <!.Sitemap.!>
<br>

    
        <p style="color:black"> Classes :         
        

    <?php
                $sect = glob('sect/*', GLOB_ONLYDIR);         //Classes
                foreach ($sect as $sec) {                  
                    $sec_id = pathinfo($sec)['basename'];
                    $sec_name = $sec_map[$sec_id];          //import list
                    echo "<a href='sec.php?id=$sec_id' style='text-decoration:none'> $sec_name | </a>";
                }
            ?>
        </p>
    
        
            <p style="margin-left:0px">
                Pages :                                     <!.Pages.!>
            
<!--              <a href = "contact.php"> Contact  | </a>
 -->             
             <a href = "index.php"> Index  | </a> 
             
            </p>
                </div><hr>
        <p align=center style="font-size:14px"> Designed by Saamarth Gupta </p>
    
</body>

</html>