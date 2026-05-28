<?php
$localhost="localhost";
$username="root";
$password="";
$db="contact";
$conn=mysqli_connect($localhost,$username,$password,$db);
if($conn)
{
    echo("db connected");
}
else
{
    echo"wrong";
}
if(isset($_POST['register']))
{
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $sql="INSERT INTO contact(fname,email,subject,message) 
    values('$fname','$email','$subject','$message')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo("record successfull");
    }
    else{
        echo"error record";
    }
    
}
?>