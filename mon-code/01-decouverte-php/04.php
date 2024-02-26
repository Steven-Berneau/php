<?php
$i = 0;
echo "<ul>";
for($i=0;$i<17;$i++)
{
    $resultat=pow(2,$i);
    echo "<li>2^$i = $resultat </li>";
}
    echo "</ul>";


$x = 0;
echo "<ul>";
while ($x <17) {
    echo $x;
    $x++;
    $resultat2=pow(2,$x);
    echo "<li>2^$x = $resultat2 </li>";
}
    echo "</ul>";
?>