<?php
    include 'map/sec.php';
?>

<html>

<head>

	<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>

<title>

BBPS Yearbook 2015 - Contact Us 		<!..Title..!>
        
</title>  

	<link rel="stylesheet" type="text/css" href="css/main1.css">    <!..CSS..!>
	<link rel="stylesheet" type="text/css" href="css/scroll.css">


<meta charset="utf-8">

</head>

<body>



<a href = "index.php"><img src = "data/homebutton.png" width = 50 height = 50 style="position:fixed;right:40px;" alt="Home" title="Home" >
    </a>
    <a href = "index.php"><img src = "data/logo1.png" width = "340" height = "185" align=left ></a>
    
    <br>
    <br>
    <br>
    <br><br><br><br><br><br><br>
    <hr><br>

	<p align = center><font size = +3> Contact Us </p></font> <!..Contact Us..!>
	
	<hr>
	<br>
	<br>

	<p style = 'width:50%;align:center; margin:0 auto; text-align:center'>
	<font size = +1>
		I have tried my best to make this website compatible with all screen resolutions, but it works best with an aspect ration of 16:9 (prefer viewing on PC rather than mobiles, switch to landscape mode for best experience).<br>
		Also, i have tried to make the website look as user-friendly as i could, if you would like some extra designs to be added and can give your inputs, feel free to send your suggestions to me, i'll see what all i can incorporate into the website.<br>
		If you have any complaints or issues in running the website or if there are any spelling mistakes in the names, let me know at the address given below.
		<br>Please make the comments short, but effective.<br>
		Cheers to the memories of our school life!<br>
		Live long and Prosper!	<!..Message..!>

	<br>
	<br>
	</p>

  	
  	<br>
  
	<p style = 'width:50%;align:center; margin:0 auto; text-align:center'>Email - 
	<br>     saamarthgupta@gmail.com																			

	</p>
	<br>
	<br>

			<hr>

<div id = "sitemap" style="line-height:4px">
<p style="margin-left:0px"> Sitemap </p> <!..Courses.>
<br>

    
        <p style="margin-left:0px;font-size:16px;color:white"> Courses :         
        

   <?php
                $sect = glob('sect/*', GLOB_ONLYDIR);         //Classes
                foreach ($sect as $sec) {                  
                    $sec_id = pathinfo($sec)['basename'];
                    $sec_name = $sec_map[$sec_id];          //import list
                    echo "<a href='sec.php?id=$sec_id' style='text-decoration:none'> $sec_name | </a>";
                }
            ?>
        </p>
    
        
            <p style="margin-left:0px;font-size:16px">
                Pages :                                                         <!.Pages.>
             
             <a href = "contact.php"> Contact  | </a>
            
             <a href = "index.php"> Home  | </a> 
            
            </p>
                </div>

                <br>

        <p align=center style="font-size:14px"></p>

</body>
</html>