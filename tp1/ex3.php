<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ex3</title>
</head>
<body>
<?php
$message=$_POST["message"]??'erreur';
$size=$_POST['size']??'12';
$color=$_POST['color']??'black';

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

<form method="POST">
    <br><label for="message">Message : </label>
    <input type="textarea" value="" name="message" id="message">
    <br><br><label for="color">Color : </label>
    <input type="color" value="" name="color" id="color">
    <br><br><label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <input type="submit" value="Valider">
</form>
</body>
</html>
