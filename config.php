<?php
$config=mysqli_connect("localhost","root","Shalini@2001","blog_web");
if(mysqli_connect_error()){
    echo "data not saved" . mysqli_connect_error();
}
?>