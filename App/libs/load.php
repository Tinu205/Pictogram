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
?>