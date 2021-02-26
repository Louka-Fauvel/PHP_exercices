<?php
include "header.php";
include("functions.php");
$texte=$_POST['texte']??'';
$choix=$_POST['choix']??'';
$caractere=$_POST['caractere']??'';
?>



<form method="post">
  <fieldset>
  <legend>Chaines</legend>
  <label>Frapper votre texte :</label>
  <br>
  <textarea rows="5" cols="50" name="texte"></textarea>
  <br>
  <select name="choix">
    <option value="Mots">Nombre de mots</option>
    <option value="Caractère">Nombre de caractères</option>
  </select>
  <label>Caractère ?</label>
  <input type="text" name="caractere"></input>
  <input type="submit" value="Compter" name="Compter"></input>
  </fieldset>
</form>

<fieldset>
<legend>Résultat</legend>
<?php
/* Teste fonctions wordCount et charCount*/
if ($choix=='Mots'){
echo wordCount($texte);
echo " mot(s)";}
else {
echo charCount($texte, $caractere);
echo " caractère(s)";}
/*echo "$texte";
echo "<br>";
echo "$choix";
echo "<br>";
echo "$caractere";*/
?>
</fieldset>

<?php
include "footer.php";
?>
