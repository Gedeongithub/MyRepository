<?php
 for ($i = 0; $i <= 5; $i++) {
    for ($s = 1; $s <= 5 - $i; $s++) {
        echo "&nbsp;";
    }
    for ($c = 1; $c <= 5; $c++) {
        echo"*&nbsp;";
    }
    echo "<br>";
}
?>