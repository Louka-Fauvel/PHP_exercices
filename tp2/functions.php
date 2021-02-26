<?php

function div($message){
    return '<span>'.$message.'</span>';
}

function createHtmlTable($nblignes, $nbcolonnes){
echo "<table border='1'>";
      for ($i = 0; $i < $nblignes; $i++) {
          echo "<tr>";
              for ($j = 0; $j < $nbcolonnes; $j++) {
                  echo "<td>";
                      echo "<div> $i - $j</div>";
                  echo "</td>";
              }
          echo "</tr>";
      }
echo "</table>";}

function element($titre, $contenu, $niveau=1){
echo"<h$niveau>$titre</h$niveau>
<div>$contenu</div>";

}

function parseElements($elements){
  for($i =0; $i < 3; $i++) {element($elements[$i]['titre'], $elements[$i]['contenu'], $elements[$i]['niveau']);}

}

function wordCount($s){
  return str_word_count($s);
}

function charCount($s,$c=NULL){
  if ($c==NULL){
  return strlen($s);}
  else{
  return mb_substr_count($s,$c);}
}


?>
