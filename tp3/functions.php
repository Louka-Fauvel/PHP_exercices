<?php
function getHeader($startSession, $title) {
  if($startSession) {
    session_start();
    echo "<html>
      <head>
        <meta charset='utf-8'>
        <title>$title</title>
      </head>
    <body>";
  }
}

function getQuestions(){
$questions=array();

$questions[]=["Quel est votre navigateur favori ?",
                ["multiple"=>false,
                    "reponses"=>["Chrome"=>1,"Firefox"=>2,"IE"=>3,"Opera"=>4,"Autre"=>10]
                ]
            ];

$questions[]=["Quels réseaux sociaux utilisez vous fréquemment ?",
                ["multiple"=>true,
                    "reponses"=>["Facebook"=>1,"Twitter"=>2,"Badoo"=>3,"Google+"=>4,"Autre"=>10]
                ]
            ];
return $questions;
}

function afficheQuestions($questions){

  $check='';
  echo "<h1>Liste des questions</h1>";
  for ($i=0;$i<count($questions);$i++){

  $q=$i+1;
  $reponses=$questions[$i][1]['reponses'];
  echo "<fieldset>
      <legend>Question {$q}</legend>
      <label><b>".$questions[$i][0]."</b></label>
      <br>";
  if ($questions[$i][1]['multiple']==true){
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

}

function afficheQuestion($index){
  $Question=getQuestions();
  $i=$index-1;
  echo "<fieldset>
      <legend>Question {$index}</legend>
      <label><b>".$Question[$i][0]."</b></label>
      <fieldset>
      <br>";
  $typeQuestion="radio";
  if ($Question[$i][1]['multiple']==true){
    $typeQuestion = "checkbox";
  }
  $reponses=$Question[$i][1]['reponses'];
  $namereponse = $index;
  echo "<form method='post'>";
  foreach ($reponses as $j => $k) {
    echo "<input type= {$typeQuestion} name= {$namereponse}[{$k}] value={$j}></input>
          <label>{$j}</label>";
  }
  echo "</fieldset>
        <br><br>
        <input type='submit' value='Valider'></input>
        </fieldset>";
  }


function getFooter(){
  echo "</body>
    </html>";
}
?>
