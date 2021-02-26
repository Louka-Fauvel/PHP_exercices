<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ex2</title>
</head>
<body>
<?php
$message=$_GET["message"]??'erreur';
$size=$_GET['size']??'12';
$color=$_GET['color']??'black';

if  ($size == 15){
		$color='red';
	}
if  ($size == 30){
		$color='green';
	}
if  ($size == 50){
		$color='blue';
	}
  echo "<div style='font-size: {$size}px;color:{$color}'>{$message}</div>";
?>

<form method="GET">
    <br><label for="message">Message : </label>
    <input type="text" value="" name="message" id="message">
    <br><br><label for="color">Color : </label>
    <input type="color" value="" name="color" id="color">
    <br><br><label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <input type="submit" value="Valider">
</form>

<br><br><a href="/tp1/ex2.php?message=Bonjour_15_rouge&size=15&color=red">Bonjour_15_rouge</a>
<br><a href="/tp1/ex2.php?message=Bonjour_30_vert&size=30&color=green">Bonjour_30_vert</a>
<br><a href="/tp1/ex2.php?message=Bonjour_50_bleu&size=50&color=blue">Bonjour_50_bleu</a>

</body>
</html>
