    <!-- <?php print($_SERVER['DOCUMENT_ROOT'].'/Pictogram/css/'.basename($_SERVER['PHP_SELF'],".php").".css");?> -->
    <?php if(file_exists($_SERVER['DOCUMENT_ROOT'].'/Pictogram/css/'.basename($_SERVER['PHP_SELF'],".php").".css")){?>
    <link href="/Pictogram/css<?php basename($_SERVER['PHP_SELF'],".php");?>.css" rel="stylesheet">
    <?php } ?>  --