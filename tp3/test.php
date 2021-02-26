<?php
if ($_POST['Mémoriser']==true){setcookie('UserName',$_POST['nom'],time()+300);}
include "functions.php";
echo getHeader(true,"Test");
$_SESSION['user']=$_POST['nom'];
echo "<br><br>";
echo ($_SESSION['user']);
echo "<br><br>";
echo "<pre>";
print_r ($_SESSION);
echo "</pre>";
echo getFooter();
?>
