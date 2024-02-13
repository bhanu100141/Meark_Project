<?php
  include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .student-container{
        background-color:white;
        color:white;
        padding:10px;
        box-shadow: 0 0 10px rgba(0, 0,0.1);
    }
    .student-head{
        font-size:50px;
        font-style:"protest strike";
        font-weight:bold;
        margin:20px;
        color:black;
    }
     .container{
        background-color:#d4f5fc;
        border-radius:20px;
     }
     th{
        font-size:20px;
        margin:20px;
     }
     .table{
        margin-right:30px;
     }
    </style>

</head>
<body>
    <div class="student-container">
        <div class="text-center student-head">
            <h1>ALL STUDENTS INFORMATION</h1>
        </div>
     <div class="container p-5 text-center">
                        
            <button class="btn btn-primary my-5"><a href="webform.php" class="text-light">Add Student</a></button>
                    
        <table class="table">
                        <thead class='text-center '>
                            <tr >
                            <th scope="col">Sl No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Class</th>
                            <th scope="col">Hobbies</th>
                            <th scope="col">Actions</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                <tbody>
                    <?php
                        $sql="select * from `students`";
                        $result=mysqli_query($con,$sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                $id=$row['id'];
                                $name =$row['name'];
                                $username=$row['username'];
                                $password=$row['password'];
                                $email=$row['email'];
                                $mobile=$row['mobile'];
                                $class=$row['class'];
                                $hobbies=$row['hobbies'];
                                echo '
                                <tr>
                                <th scope="row">'.$id.'</th>
                                <td><a href="studentinformation.php?nameid='.$id.'">'.$name.'</a></td>
                                <td>'.$username.'</td>
                                <td>'.$password.'</td>
                                <td>'.$email.'</td>
                                <td>'.$mobile.'</td>
                                <td>'.$class.'</td>
                                <td>'.$hobbies.'</td>
                                <td>
                                <button class="btn btn-warning"><a href="update.php?updateid='.$id.'"
                                class="text-light">Update</a></button>
                                </td>
                                <td>
                                <button class="btn btn-danger"><a href="remove.php?removeid='.$id.'"
                                class="text-light">Remove</a></button>
                                </td>
                            </tr>
                                ';
                            }

                        }
                        
                    ?>
                </tbody>
            </table>
        </div>
     </div>
   </body>
</html>