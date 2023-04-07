<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$link = mysqli_connect("localhost", "root", "", "letstalk");

if($link === false){
    die("Error: ".mysqli_connect_error());
}

$sql = "INSERT INTO contact (name, email, subject, message) values ('$name','$email','$subject', '$message')";


if(mysqli_query($link, $sql)){
    echo '<script>alert("Success!")</script>';
    header("Location:index.php");
}
else{
    echo "Error: ".mysqli_error($link);
}

mysqli_close($link);
?>