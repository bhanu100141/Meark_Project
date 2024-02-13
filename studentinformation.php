<?php
   include "connect.php";
//    include 'update.php';
   $id=$_GET['nameid'];
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
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .Info-container{
           background-color:#b9e0fa;
           height:100vh;
        }
        .info-head{
            font-weight:bold;
            font-size:50px;
        }
        .card{
           margin:50px;
           padding-top:40px;
           padding-bottom:40px;
           border-radius:30px;
           

        }
        .card-data{
            font-weight:bold;
        }
    </style>

</head>
  <body>
  <div class='Info-container text-center'>
    <div class="container p-5">
        <h1 class="info-head">STUDENT DETAILS</h1>

     <form method="post">
        <div class="mb-3 card text-center card-data">
            <div class="mb-3">
            <?php echo "Name :  $name <br>"?>
            <?php echo "userName :   $username <br>"?>
            <?php echo "Password :   $password <br>"?>
            <?php echo "Email :      $email <br>"?>
            <?php echo "Mobile Number :     $mobile <br>"?>
            <?php echo "Class :      $class <br>"?>
            <?php echo "Hobbies :    $hobbies <br>"?>
         </div>
            <div>
                <button class="btn btn-warning"><a href="studentdetails.php"
                    class="text-light">Back</a>
                </button>
           </div>
      </form>

    </div>
    </div>
  </body>
</html>