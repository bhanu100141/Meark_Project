<?php

$con = new mysqli("localhost","root","","schooldb");
if(!$con){
    die(mysqli_error($con));
}
?>