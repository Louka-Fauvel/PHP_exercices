<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ex1</title>
</head>
<body>
<br><a href="/tp1/ex1.php?message=1">Afficher 1</a>
<br><a href="/tp1/ex1.php?message=2">Afficher 2</a>
<br><a href="/tp1/ex1.php?message=3">Afficher 3</a>
<?php
echo "<br>Vous êtes sur la page n° ".($_GET['message']??1);
?>
</body>
</html>
