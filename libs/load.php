<?php
    function load_template($name){
        include $_SERVER['DOCUMENT_ROOT']."/Pictogram/_templates/$name.php";
        // include __DIR__."/../_templates/$name.php";
    }

    function sign_up($username,$password,$email){
        $servername = "localhost";
        $dbUsername = "panda"; // Changed variable name
        $dbPassword = "cutepanda"; // Changed variable name
        $dbname = "newdb";
    
        // Create connection
        $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "INSERT INTO `auth` (`username`, `email`, `password`)
        VALUES ($username, $email,$password);";
        $result = false;
        if($conn->query(($sql) === TRUE)){
            $result = true;
        }else{
            $result = false;
        }    
        // Rest of your code...
    
        $conn->close();

        return $result;
    }

?>

