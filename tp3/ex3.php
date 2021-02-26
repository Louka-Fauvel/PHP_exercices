<?php
include "functions.php";
echo getHeader(true,"ex3");
$_SESSION['navigateur']=$_POST['navigateur']??'';
?>
<form method="post">
  <fieldset>
  <legend>Question1</legend>
  <label>Quel est votre navigateur favori ?</label>
  <fieldset>
  <input type="radio" name="navigateur" value="Chrome"></input>
  <label>Chrome</label>
  <input type="radio" name="navigateur" value="Firefox"></input>
  <label>Firefox</label>
  <input type="radio" name="navigateur" value="IE"></input>
  <label>IE</label>
  <input type="radio" name="navigateur" value="Opera"></input>
  <label>Opera</label>
  <input type="radio" name="navigateur" value="Autre"></input>
  <label>Autre</label>
  </fieldset>
  <br><br>
  <input type="submit" value="Valider"></input>
  </fieldset>
</form>
<?php
echo $_SESSION['navigateur'];
getFooter();
 ?>
