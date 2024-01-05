<?php
    function load_template($name){
        include $_SERVER['DOCUMENT_ROOT']."/Pictogram/_templates/$name.php";
        // include __DIR__."/../_templates/$name.php";
    }
?>