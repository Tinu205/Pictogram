<?php
function load_template($name){
    include "templates/$name.php";
}
function valid($username,$password){
    if($username == "Panda@gmail.com" && $password == "1234"){
        return True;
    }else{
        return False;
    }
}
function signup($user,$pass,$email,$phone){
    $servername = "localhost";
    $username = "panda";
    $password = "cutepanda";
    $dbname = "Newdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO `Auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
    VALUES ($user, $pass, $email, $phone, '0', '1')";
    $result = false;
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    $result = true;
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    $result = false;
    }

    $conn->close();
    return $result;  
}
?>