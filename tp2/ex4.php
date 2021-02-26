<?php
include "header.php";
?>
<!--Contenu de la page-->

<?php
  $nblignes=$_GET["nblignes"]??'';
  $nbcolonnes=$_GET['nbcolonnes']??'';
  $color=$_GET['color']??'red';



?>

<a href="/tp2/ex4.php?nblignes=2&nbcolonnes=2">Créer un tableau 2x2</a>
<br><a href="/tp2/ex4.php?nblignes=5&nbcolonnes=5">Créer un tableau 5x5</a>
<br><a href="/tp2/ex4.php?nblignes=10&nbcolonnes=8">Créer un tableau 10x8</a><br><br>

<?php
echo "<table border='1'>";
      for ($i = 0; $i < $nblignes; $i++) {
          echo "<tr>";
              for ($j = 0; $j < $nbcolonnes; $j++) {
                  echo "<td>";
                      if ($j&1){
                      $color='red';} else {$color='black';}
                      if ($i&1){
                      $weight='bold';} else {$weight='normal';}
                      echo "<div style='color:{$color}; font-weight:{$weight}'> $i - $j</div>";
                  echo "</td>";
              }
          echo "</tr>";
      }
echo "</table>";
?>


<?php
include "footer.php";
?>
