<?php
    include 'map/sec.php';
?>

<html>

<head>

    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'> <!.. Favicon..>

<title> 
    DTU-IT Yearbook 2020 - Home        
</title>  

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/scroll.css">       <!..Link CSS..!>

<meta name=viewport content="width=device-width, initial-scale=0">
<meta charset="utf-8">
</head>

<body>

<!-- <a href = "contact.php">
        <img src = "data/contact.png" width = '100' height = '100' style="position:absolute;right:3%;" alt="Home" title="Contact" >
    </a> -->
                                                                 <!.Homebutton.>
    <a href = "index.php"><img src = "data/logo1.png" width = "100" height = "100" align=left ></a>                   <!.Applogo.!>
    
    <br><br><br><br><br><br><br><br><br><br><hr><br>

    <table border = "2" width = "62%" height = "6%" border color = "black" align="center" >         <!..Courses..>
        <caption style="font-size:32px;"> Classes
        </caption>
        <tr colspan = 1 align = center bgcolor = orange>
			<?php
			    $sect = glob('sect/*', GLOB_ONLYDIR);
			    foreach ($sect as $sec) {                  
			        $sec_id = pathinfo($sec)['basename'];
			        $sec_name = $sec_map[$sec_id];          //import list
			        echo "<td style='font-weight:bold;font-size:18px;'><a style='color:black;' href='sec.php?id=$sec_id' style='text-decoration:none;'>$sec_name</a></td>\n";
			    }
			?>
        </tr>
    </table>

    <br><hr><br><br>
    
  
    <p style="font-family:'Segoe UI';font-weight:bold;margin-top:-5px;margin-right:5%;margin-left:5%;background:rgba(255, 255, 255,0.5);
            color:black;padding:10px;border-radius:15px; text-align:center;font-size:18px;">                                                             
        IMPORTANT NOTICE<br>
        (YEARBOOK 2016-20)<br>
    </p>                        
     <p style="font-family:'Segoe UI';font-weight:bold;margin-top:0px;margin-right:5%;margin-left:5%;background:rgba(255, 255, 255,0.5);
            color:black;padding:10px;border-radius:15px;font-size:18px;text-align: center">
        Those who want to write something about their classmates, can open their walls and write about them.<br> Treat this as your virtual Scribble Day.<br>
        Peace!

     </p>
     <p style="font-family:'Segoe UI';font-weight:bold;margin-top:0px;margin-right:5%;margin-left:5%;background:rgba(255, 255, 255,0.5);
            color:black;padding:10px;border-radius:15px;text-align:center;font-size:18px;">
        If your Name is missing, or if you have any other issues<br>
    CONTACT: SAAMARTH GUPTA (Class Group) <br>
    
    P.S. - I Know the UI is bad.

    </p>
<br>

    <hr>

<div id = "sitemap" style="line-height:5px">       <!..Sitemap..> 
<p style="margin-left:0px"> Sitemap </p>
<br>

    
        <p width=100% style="color:white;font-size:18px;"> Classes :         <!.Courses.>
        

    <?php
                $sect = glob('sect/*', GLOB_ONLYDIR);     //Courses
                foreach ($sect as $sec) {                  
                    $sec_id = pathinfo($sec)['basename'];
                    $sec_name = $sec_map[$sec_id];          //import list
                    echo "<a href='sec.php?id=$sec_id' style='font-size:18px;text-decoration:none;'> $sec_name | </a>";
                }
            ?>
        </p><br>
    
        
            <p style="margin-left:0px;font-size:18px;">
                Pages :                             <!..Pages..>
             
            <!--  <a href = "contact.php" style="font-size:18px;"> Contact  | </a> -->
             
             <a href = "index.php" style="font-size:18px;"> Home  | </a> 
              
            </p>
                </div><hr>
        <p align=center style="font-size:14px"> Designed by Saamarth Gupta </p>    
        
</body>

</html>