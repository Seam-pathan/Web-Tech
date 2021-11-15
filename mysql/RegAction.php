<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    $sql = "INSERT INTO uregistration (firstname, lastname, gender, DateOfBirth, Religion, PresentAddress, PermanentAddress, phone, email, username, pwd)
     values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$DateOfBirth = $_POST['dob'];
$Religion = $_POST['Religion'];
$PresentAddress = $_POST['PresentAddress'];
$PermanentAddress = $_POST['PermanentAddress'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$pwd = $_POST['pwd'];
     

        $stmt= $conn->prepare($sql);
        $stmt->bind_param("sssssssssss", $firstname, $lastname, $gender, $DateOfBirth, $Religion, $PresentAddress, $PermanentAddress, $phone, $email, $username, $pwd);
        // $firstname = $_POST['firstname'];
        // $lastname = $_POST['lastname'];
        // $gender = $_POST['gender'];
        // $DateOfBirth = $_POST['dob'];
        // $Religion = $_POST['Religion'];
        // $PresentAddress = $_POST['PresentAddress'];
        // $PermanentAddress = $_POST['PermanentAddress'];
        // $phone = $_POST['phone'];
        // $email = $_POST['email'];
        // $username = $_POST['username'];
        // $pwd = $_POST['pwd'];
        $res = $stmt->execute();
        if($res){
        echo "registration successfully.....";
        }
        else{
            echo "Failed";
        }
        $conn->close();
}
?>