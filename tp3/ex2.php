<?php
include "functions.php";
getHeader(true,"ex2");
if($_COOKIE['UserName']<>''){
  header('Location: ../tp3/recoAuto.php');
  exit();
}
?>
<form method="post" action="test.php">
  <fieldset>
  <legend>Connexion</legend>
  <input type="text" name="nom"></input>
  <input type="submit" value="Valider"></input>
  <br>
  <input type="checkbox" name="Mémoriser" checked></input>
  <label>Mémoriser mes informations de connexion</label>
  </fieldset>
</form>
<?php
getFooter();
 ?>
