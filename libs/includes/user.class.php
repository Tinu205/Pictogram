<?php
class user
{
    #private static String salt = "This is a salt";
    public static function sign_up($username, $email, $password) 
    {
        $conn = database::getconnection();
        $password = password_hash($password,PASSWORD_BCRYPT); 
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

        $query = "SELECT * FROM `auth` WHERE `username` = '$user' LIMIT 50 ";
        $connection = database::getconnection();
        $result = $connection->query($query);
        if($result->num_rows==1)
        {
            $row = $result->fetch_assoc();
            //echo $row['password'];
            if(password_verify($password,$row['password']))
            {
                return true;
            }else{
                echo "Wrong password";
            }
        }else{
            return false;
        }
  }
  public function __construct($username)
  {
    $this->conn = database::getconnection();
    $this->conn->query();
    $this->username = $username;
    //Todo write code to fetch username from database is username is not present,throw exception
  }
  public function setBio(){
    //Write update date command to change bio
  }
}
?>
