<?php

include_once('./include/WikiImport.php');

$wi = new WikiImport();
print $wi->getPage($_POST['page']);

?>
