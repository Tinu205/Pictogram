<?php
class user
{
    public static function sign_up($username, $email, $password) 
    {
        $conn = database::getconnection();
    
        // Concatenate user inputs into SQL query string
        $sql = "INSERT INTO `auth` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
        $error = false;
        if($conn->query($sql) === true){
            $error = false;
        }else{
            $error = $conn->error;
        }

        return $error;
    }
}
?>