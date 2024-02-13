<?php
   include 'connect.php';
   if(isset($_GET['removeid'])){
      $id=$_GET['removeid'];
      $sql ="delete from `students` where id=$id";
      $result=mysqli_query($con,$sql);
      if($result){
        // echo "Deleted";
        header('location:studentdetails.php');
      }else{
        die(mysqli_error($con));
      }
   }

?>