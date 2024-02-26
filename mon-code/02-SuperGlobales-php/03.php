<?php
echo "bonjour";
var_dump($_GET);
if ((isset($_GET['n'])))
    $n= $_GET['n'];
  else
    $n=1;
echo $n;  

echo "<ul>";
for($i=100;$i >= $n;$i--){
    echo "<li>$i</li>";
}
echo "</ul>";
?>