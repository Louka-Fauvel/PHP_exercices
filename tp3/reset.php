<?php
include "functions.php";
getHeader(true,"ex5");
getFooter();
session_destroy();
$_SESSION = array();
echo "<pre>";
print_r ($_SESSION);
echo "</pre>";
echo '<meta http-equiv="refresh" content="3; url=http://127.0.0.1/PHP_s%C3%A9ance/tp3/ex1.php">
<p>Attendez 3 secondes...</p>';
 ?>
