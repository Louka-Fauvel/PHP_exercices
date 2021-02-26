<?php
include "functions.php";
getHeader(true,"ex7");
$Questions=getQuestions();
$check='';
echo "<h1>Liste des questions</h1>";
for ($i=0;$i<count($Questions);$i++){

$q=$i+1;
$reponses=$Questions[$i][1]['reponses'];
echo "<form method='post'>
    <fieldset>
    <legend>Question {$q}</legend>
    <label><b>".$Questions[$i][0]."</b></label>
    <br>";
if ($Questions[$i][1]['multiple']==true){
  $check = "checked";
}
echo "<input type='checkbox'".$check."></input>
     <label>Question à réponses multiples</label>";
echo "<ul>";
  foreach ($reponses as $j => $k) {
    echo "<li>".$j."</li>";
    }
echo "</ul>
      </fieldset>";
}
getFooter();
?>
