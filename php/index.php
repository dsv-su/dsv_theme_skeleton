<?php
require_once('./include.php'); // provides $db, $translations

header('Content-Type: text/html; charset=UTF-8');

$base = file_get_contents('./template.html');

$lang='sv';
if(isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}

$base = replace($translations[$lang], $base);


###### EXAMPLE CODE FOLLOWS ######

print replace(array(
    '¤pagetitle' => "Skelettsida",
    '¤contents'  => 'TEST',
), $base);

?>
