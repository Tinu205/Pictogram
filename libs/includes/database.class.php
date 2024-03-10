<?php
 class database
 {
    public static $conn=null;

    public static function getconnection()
    {
        if(database::$conn==null)
        {
            $servername = "localhost";
            $username_db = "panda"; // Changed variable name
            $password_db = "cutepanda"; // Changed variable name
            $database = "pictogram";
    
            // Create connection
            $connection = new mysqli($servername, $username_db, $password_db, $database);
            if($connection->connect_error)
            {
                die("Connection failed: " . $connection->connect_error);
            }else{
                database::$conn = $connection;
                return database::$conn;
            }

        }else{
            return database::$conn;
        }
    }

 }
?>