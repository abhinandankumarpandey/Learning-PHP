
<?php
$server ="localhost";
$username ="root";
$password ="";
$database ="safari";
$connect =mysqli_connect($server,$username,$password,$database);

if(!$connect)
{
    die("Connection failed: " .mysqli_connect_error());
}

$name =$_POST["student_name"];
$age=$_POST["student_age"];
$gender =$_POST["student_gender"];
$email =$_POST["student_gmail"];
$phone =$_POST["phone"];
$description =$_POST["description"];
$sql="INSERT INTO `history`(`name`, `age`, `gender`, `phone`, `email`, `description`, `dt`) VALUES ('$name','$age','$gender','$phone','$email','$description',current_timestamp());";

$connect->query($sql);


$connect->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-image: url("bg.jpg");
        }
        h1{
          text-align: center;
        }
        .container{
            justify-content: center;
        }
        input ,textarea{
            width: 80%;
            margin-bottom: 5px;
        }
        form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
    </style>
    <title>park form</title>
</head>
<body>
    <h1>welcome to the trip form</h1>
    <div class="container">
    <form action="checklearning.php" method="post">
<input type="text" name="student_name" placeholder="enter your name eg Rahul" >
<br>
<input type="number" name="student_age" placeholder="enter your age eg 18" >
<br>
<input type="text" name="student_gender" placeholder="enter your gender eg male or female">
<br>
<input type="email" name="student_gmail" placeholder="enter your gmail eg abc@gmail.com">
<br>
<input type="tel"		max="10" name="phone" placeholder="enter your phone no">
<br>
<textarea type="text"name="description"  placeholder=" add additional information " cols="30" rows="4"></textarea>
<button type="submit" name="save_form">Submit</button>
    </form>
    </div>
   
</body>
</html>