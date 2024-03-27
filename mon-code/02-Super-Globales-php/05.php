<?php
echo "<p>Bom Dia !</p>";
var_dump($_GET);
if ((isset($_GET['n'])))
    $n= $_GET['n'];
  else
    $n=1;
echo $n;  

echo "<ul>";
for($i=0;$i<=$n;$i++)
{
    $resultat=pow(2,$i);
    echo "<li>2^$i = $resultat </li>";
}
    echo "</ul>";


$x = 0;
echo "<ul>";
while ($x <=$n) {
    echo $x;
    $x++;
    $resultat2=pow(2,$x);
    echo "<li>2^$x = $resultat2 </li>";
}
    echo "</ul>";
?>