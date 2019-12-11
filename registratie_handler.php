<?php
echo "<h1>Forum registratie</h1>";
echo " Uw naam is " . PHP_EOL;
 echo htmlspecialchars($_POST['name']);
 echo " Uw leeftijd is " . PHP_EOL;
 echo (int)$_POST['age'];
 ?>
