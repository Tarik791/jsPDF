<?php 
$con = mysqli_connect('localhost','root','',) or die ("conn error");


if(!mysqli_select_db($con, 'obrazac')){
    echo 'Database not selected';
}


?>