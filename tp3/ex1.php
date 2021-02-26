<?php
include "functions.php";
getHeader(true,"ex1");
echo "Je suis là"; //Test ouverture page
$_SESSION['user']=$_POST['nom']??'';
?>
<form method="post" action="test.php">
  <fieldset>
  <legend>Connexion</legend>
  <input type="text" name="nom"></input>
  <input type="submit" value="Valider"></input>
  </fieldset>
</form>
<?php
getFooter();
 ?>
