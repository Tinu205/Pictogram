<?php
    function load_template($name){
        include $_SERVER['DOCUMENT_ROOT']."/Pictogram/_templates/$name.php";
        // include __DIR__."/../_templates/$name.php";
    }

    function sign_up($username, $password, $email) {
        $servername = "localhost";
        $username_db = "panda"; // Changed variable name
        $password_db = "cutepanda"; // Changed variable name
        $database = "pictogram";
    
        // Create connection
        $conn = new mysqli($servername, $username_db, $password_db, $database);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
    
        // Concatenate user inputs into SQL query string
    $sql = "INSERT INTO `auth` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";

    // Execute the query
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result) {
        $result = true;
    } else {
        $result = false;
    }    

    // Close the connection
    $conn->close();

    return $result;
}

?>

