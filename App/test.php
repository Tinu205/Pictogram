<pre>
<?php
$cookie_name = "Panda";
$cookie_value = "Bamboos";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
print("_Server");
print_r($_SERVER);
print("_GET");
print_r($_GET);
print("_Post");
print_r($_POST);
print("_Files");
print_r($_FILES);
print("Cokkies");
print_r($_COOKIE);
?>
</pre>