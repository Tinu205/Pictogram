<?php

function load_template($name){
    //print(__FILE__);
    include __DIR__."../../_templates/$name.php";//or require_once __DIR__. is used to go from current direcotry
}
?>