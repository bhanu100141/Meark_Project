<?php
   include "connect.php";
   $id=$_GET['updateid'];
   $sql="Select * from `students` where id=$id";
   $result=mysqli_query($con,$sql);
   $row=mysqli_fetch_assoc($result);
    $name =$row['name'];
    $username=$row['username'];
    $password=$row['password'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $class=$row['class'];
    $hobbies=$row['hobbies'];


   if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $class=$_POST['class'];
    $hobbies=$_POST['hobbies'];
    $sql ="update `students` set id=$id,name='$name',username='$username',password='$password',
    email='$email',mobile='$mobile',class='$class',hobbies='$hobbies' 
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted";
        header('location:studentdetails.php');
    }else{
        die(mysqli_error($con));
    }
   }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .update-container{
            padding:40px;
        }
        .container{
            background-color:#fceddc;
            margin:60px;
            border-radius:30px; 
        }
    </style>
</head>
  <body>
    <div class='update-container'>
    <div class="container p-5">
        <h1 class='text-center pb-3'>Add Student Details</h1>
        <div class="student-form">

        <form method="post">
        <div class="mb-3">
                <label >Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" value=<?php echo $name ?>>
                
            </div>
            <div class="mb-3">
                <label >UserName</label>
                <input type="text" class="form-control" placeholder="Enter Your Username" name="username" autocomplete="off" value=<?php echo $username ?>>
                
            </div>
            <div class="mb-3">
                <label >Password</label>
                <input type="password" class="form-control" placeholder="Enter Your Password" name="password" autocomplete="off" value=<?php echo $password ?>>
                
            </div>
            <div class="mb-3">
                <label >Email</label>
                <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off" value=<?php echo $email ?>>
            </div>
            <div class="mb-3">
                <label >Mobile</label>
                <input type="text" class="form-control" placeholder="Enter Your Mobile Number" name="mobile" autocomplete="off" value=<?php echo $mobile ?>>
                
            </div>
            <div class="mb-3">
                <label >Class</label>
                <input type="text" class="form-control" placeholder="Enter Your Class" name="class" autocomplete="off" value=<?php echo $class ?>>
                
            </div>
            <div class="mb-3">
                <label >Hobbies</label>
                <input type="text" class="form-control" placeholder="Enter Your Hobbies" name="hobbies" value=<?php echo $hobbies ?>>
                
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
        </div>
        </div>
    </div>
  </body>
</html>