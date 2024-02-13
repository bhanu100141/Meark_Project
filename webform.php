<?php
   include "connect.php";
   if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $class=$_POST['class'];
    $hobbies=$_POST['hobbies'];
    $sql ="insert into `students` (name,username,password,email,mobile,class,hobbies) 
    values('$name','$username','$password','email','mobile','class','hobbies')";
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
      .Home-container{
        background-color:black;
        }
     
     .main-title{
        font-size:40px;
        font-weight:bold;
        color:white;
     }
     .home-card{
        background-color:white;
        padding:60px;
        font-weight:bold;
        border-radius:40px;
        font-size:20px;
     }
     .card-heading{
        color:black;
        font-size:30px;
        font-style:"protest strike";
        font-weight:bold;
        padding:20px;
     }
   

    </style>
  </head>
  <body>
    <div class=Home-container>
    <div class="container p-5">
        <h1 class='main-title text-center mb-5'>STUDENTS RECORDS</h1>
        <div class='home-card'>
        <h1 class=" card-heading text-center">Add Student Details</h1>
        <div class="student-form">

        <form method="post" id="studentForm" onsubmit="return validateForm()">
        <div class="mb-3">
                <label >Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" id="name" autocomplete="off" required>
                
            </div>
            <div class="mb-3">
                <label >UserName</label>
                <input type="text" class="form-control" placeholder="Enter Your Username" name="username" id="username" autocomplete="off" required>
                
            </div>
            <div class="mb-3">
                <label >Password</label>
                <input type="password" class="form-control" placeholder="Enter Your Password" name="password" id="password" autocomplete="off" required>
                
            </div>
            <div class="mb-3">
                <label >Email ID</label>
                <input type="email" class="form-control" placeholder="Enter Your Email" name="email" id="email" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <label >Mobile Number</label>
                <input type="text" class="form-control" placeholder="Enter Your Mobile Number" name="mobile" id="mobile" autocomplete="off" required>
                
            </div>
            <div class="mb-3">
                <label >Class</label>
                <input type="text" class="form-control" placeholder="Enter Your Class" name="class" id="class" autocomplete="off" required>
                
            </div>
            <div class="mb-3">
                <label >Hobbies</label>
                <input type="text" class="form-control" placeholder="Enter Your Hobbies" name="hobbies" id="hobbies" autocomplete="off" required>
                
            </div>
            <div class='text-center'>
               <button type="submit" class="btn btn-dark p-2 m-2" name="submit">Submit</button>
             </div>
        </form>
        <script>
                // JavaScript validation
                document.getElementById("studentForm").addEventListener("submit", function(event) {
                    var name = document.getElementById("name").value;
                    var username = document.getElementById("username").value;
                    var password = document.getElementById("password").value;
                    var email = document.getElementById("email").value;
                    var mobile = document.getElementById("mobile").value;
                    var class_ = document.getElementById("class").value;
                    var hobbies = document.getElementById("hobbies").value;

                    // Basic validation to check if any field is empty
                    if (name === "" || username === "" || password === "" || email === "" || mobile === "" || class_ === "" || hobbies === "") {
                        alert("All fields are required");
                        event.preventDefault(); // Prevent form submission
                    }
                });
        </script>
      </div>
     </div>
    </div>
    </div>
  </body>
</html>