<?php
include "header.php";
include("functions.php");
$lignes=$_POST["Lignes"]??'2';
$colonnes=$_POST['Colonnes']??'2';
echo div('Tableau PHP');
?>

<br><br>
<form method="post">
  <legend>Création de tableau</legend>
  <br>
  <label for="Lignes">Lignes : </label>
  <input type="number" value="" name="Lignes">
  <label for="Colonnes">Colonnes : </label>
  <input type="number" value="" name="Colonnes">
  <input type="submit" value="Créer le tableau">
</form>
<br><br>
<?php
createHtmlTable($lignes, $colonnes);
 ?>

 <?php
 include "footer.php";
 ?>
