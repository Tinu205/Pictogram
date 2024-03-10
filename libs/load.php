<?php
    include_once "includes/database.class.php";
    include_once "includes/user.class.php";
    function load_template($name){
        include $_SERVER['DOCUMENT_ROOT']."/Pictogram/_templates/$name.php";
        // include __DIR__."/../_templates/$name.php";
    }

    function sign_up($username, $email, $password) {
        $conn = database::getconnection();
    
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
    //$conn->close();

    return $result;
}

?>

