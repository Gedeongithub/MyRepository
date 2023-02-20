<?php

for($i=1;$i<=5;$i++) {
    for ($s = 1; $s <= 5 - $i; $s++) {
        echo "&nbsp;";
    }
    for ($st = 1; $st <= $i * 2 - 1; $st++){
        echo"*";
}
echo "<br>";
}




?>