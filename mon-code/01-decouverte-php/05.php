<?php
$durée = 6700;
$heure =intval($durée/3600);
$reste = $durée%3600;
$minute = intval($reste/60);
$seconde = $reste%60;

echo "<p> $heure h $minute m $seconde s </p>";
echo "<script>alert('Voici le résultat')</script>";
?>