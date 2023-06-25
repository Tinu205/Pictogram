<pre>
<?php
include 'libs/load.php';
// $cookie_name = "Panda";
// $cookie_value = "Bamboos";
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
// print("_Server");
// print_r($_SERVER);
// print("_GET");
// print_r($_GET);
// print("_Post");
// print_r($_POST);
// print("_Files");
// print_r($_FILES);
// print("Cokkies");
// print_r($_COOKIE);
printf("Here it starts");
if(signup("Sample001","samplepass","sample01@gmail.com","10293847576")){
    printf("Success");
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</pre>