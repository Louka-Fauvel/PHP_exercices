<?php
include "functions.php";
echo getHeader(true,"ex4");
$_SESSION['socialNetworks']??'';
$Rezo??'';
?>
<form method="post">
  <fieldset>
  <legend>Question2</legend>
  <label>Quels réseaux sociaux utilisez-vous régulièrement ?</label>
  <fieldset>
  <input type="checkbox" name="check1" value="Facebook"></input>
  <label>Facebook</label>
  <input type="checkbox" name="check2" value="Twitter"></input>
  <label>Twitter</label>
  <input type="checkbox" name="check3" value="Badoo"></input>
  <label>Badoo</label>
  <input type="checkbox" name="check4" value="Google +"></input>
  <label>Google +</label>
  </fieldset>
  <br><br>
  <input type="submit" value="Valider"></input>
  </fieldset>
</form>
<?php
$j=0;
for ($i=1;$i<5;$i++){
    if (isset($_POST["check$i"])){
      echo $_POST["check$i"];
      $Rezo[$j]=$_POST["check$i"];
      $j=$j+1;
  }
}
echo "<pre>";
print_r ($Rezo);
echo "</pre>";
$_SESSION['socialNetworks']=$Rezo;
echo "<pre>";
print_r ($_SESSION);
echo "</pre>";
getFooter();
 ?>
