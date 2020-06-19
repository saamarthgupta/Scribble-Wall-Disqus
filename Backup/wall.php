<!DOCTYPE HTML>

<?php
    include 'map/sec.php';                      
    $sec_id = $_GET["sec"];                   
    $stu = $_GET["stu"];
    
    if($sec_id=='a' || $sec_id == 'b')
        $true = 1;
    else{
        header("HTTP/1.0 404 Not Found");
        echo "<h1>404 Not Found</h1>";
        echo "The page that you have requested could not be found.";
        exit();
    }
    if($stu < 1 || $stu > count($stu_map[$sec_id])){
        header("HTTP/1.0 404 Not Found");
        echo "<h1>404 Not Found</h1>";
        echo "The page that you have requested could not be found.";
        exit();
    }
    $stu_name = $stu_map[$sec_id][$stu];
?>

<html>

<head>

    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>

    <title>

       DTU-IT Yearbook 2020 - <?= $stu_name ?> 

    </title>                        
        
        <link rel="stylesheet" type="text/css" href="css/player.css">
        <link rel="stylesheet" type="text/css" href="css/scroll.css">
<meta property="fb:app_id" content="798347966928829">
<meta property="fb:admins" content="100000064020119">
</head>

<body>


    <a href='sec.php?id=<?=$sec_id?>'><img src = "data/bb.png" width = 50 height = 50 alt="Back" title="Back" style="position:fixed;right:100px;" ></a>
    <a href = "index.php"><img src = "data/homebutton.png" width = 50 height = 50 alt="Home" title="Home" style="position:fixed;right:40px;" >
    </a> <!..Homebutton..!>

    <h2 style="text-align:center;color:black;"><a href='sec.php?id=<?=$sec_id?>' style='text-decoration:none;color:black'><?= $sec_map[$sec_id] ?></a></h2> 
                <!..Course ID (Category)..!>

    <h3 style="text-align:center;">Student <?= $stu ?> - <?= $stu_name ?></h3> <!..Lecture Name..!>
    <br>
    <div id='player'>

<?php

    $stu_prev = $stu - 1;
    $href = "wall.php?sec=$sec_id&stu=$stu_prev";           //Condition for Previous and Next Buttons
    if ($stu_prev>=1) {
        echo "<a href='$href' class='navbutton' id='prev_button'>&larr; Previous</a>";
    }
    $stu_next = $stu + 1;
    $href = "wall.php?sec=$sec_id&stu=$stu_next";
    if ($stu_next<=count($stu_map[$sec_id])) {
        echo "<a href='$href' class='navbutton' id='next_button'>Next &rarr;</a>";
    }
?>
<br><br><br><hr><br>
<center>
<font face = 'verdana' style="font-size:20px">
<?php

    echo "<p> $stu_name </p>";
    
?>
</center></font>
<br>
<hr>
<br>
    </div>

<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = '<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = '<?php echo "$_SERVER[REQUEST_URI]" ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://dtu-2k16-it-wall.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            


<!-- <div id="disqus_thread">
	<p></p>
</div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'bbpsyearbook';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
   
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'bbpsyearbook';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
</script> -->

                                                                
    <br><hr><br>
    <p align=center style="font-size:14px"> </p>

<div id = "sitemap" style="line-height:4px">
<p style="margin-top:5px"> Sitemap </p>     <!.Sitemap.!>
<br>

    
        <p style="color:black"> Classes :         
        

     <?php
                $sect = glob('sect/*', GLOB_ONLYDIR);         //Classes
                foreach ($sect as $sec) {                  
                    $sec_id = pathinfo($sec)['basename'];
                    $sec_name = $sec_map[$sec_id];          //import list
                    echo "<a href='sec.php?id=$sec_id' style='text-decoration:none;color:black'> $sec_name | </a>";
                }
            ?>
        </p>
    
        
            <p style="margin-left:0px">
                Pages :                                        <!.Pages.!>
            
<!--              <a href = "contact.php" style='text-decoration:none;color:black'>    | Contact  | </a>
 -->             
             <a href = "index.php" style='text-decoration:none;color:black'> Home </a> 
             
            </p>
                </div><hr>
        <p align=center style="font-size:14px"> Designed by Saamarth Gupta </p>
    
<script id="dsq-count-scr" src="//dtu-2k16-it-wall.disqus.com/count.js" async></script>                                                     
</body>

</html>