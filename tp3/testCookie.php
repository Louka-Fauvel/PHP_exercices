<?php
include "functions.php";
getHeader(true,"ex6");
echo "<br><br>";
echo "Votre nom est :" .$_COOKIE['UserName'];
echo "<br><br>";
?>
<form method="post" action="resetCookie.php">
  <fieldset>
  <legend>Reset du Cookie</legend>
  <input type="submit" value="Valider"></input>
  </fieldset>
</form>
<?php
getFooter();
 ?>
