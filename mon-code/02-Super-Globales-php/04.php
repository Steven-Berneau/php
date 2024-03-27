<?php

echo "bonjour";
var_dump($_GET);
if ((isset($_GET['n'])))
    $n= $_GET['n'];
  else
    $n=50;
echo $n;  


echo "<ul>";
$max= intval($n/2);
for($i=1;$i <= $max;$i++){
  $resultat=$i*2;
    echo "<li>$resultat</li>";
}
echo "</ul>";

?>