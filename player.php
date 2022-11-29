<?php
$string=$_GET["name"];
$arrayString=  explode("/", $string ); 
echo '<';
echo 'center>';
echo '<';
echo 'video width="320" height="240" controls>';
echo '<';
echo 'source src="https://www.googleapis.com/drive/v3/files/';
echo $arrayString[5];
echo '?alt=media&key=AIzaSyBeBuUiwBp6x8olp62yP9vzcb6yjbB20YY" type="video/mp4">';
echo '<';
echo '/video>';
echo '<';
echo '/center>';

?>



