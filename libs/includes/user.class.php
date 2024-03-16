<?php
class user
{
    public static function sign_up($username, $email, $password) 
    {
        $conn = database::getconnection();
        $password = md5($password);
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
    public static function login($user,$password)
    {
        $password = md5($password);
        $query = "SELECT * FROM `auth` WHERE `username` = '$user' LIMIT 50 ";
        $connection = database::getconnection();
        $result = $connection->query($query);
        if($result->num_rows==1)
        {
            $row = $result->fetch_assoc();
            if($row['password']==$password)
            {
                return true;
            }else{
                echo "Wrong password";
            }
        }else{
            return false;
        }
    }
}
?>