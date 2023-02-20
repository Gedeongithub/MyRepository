<?php

for($i=1;$i<=5;$i++){
    for($s=1;$s<=5-$i;$s++){
        echo "&nbsp;&nbsp;";
    }
    for($st=1;$st<=$i*2-1;$st++){
        echo"*";
    
    
}
echo"<br>"; 
}



//------------------------------------
for($i=5;$i>=1;$i--){
    if($i==5){
   continue;
    }
    for($s=1;$s<=5-$i;$s++){
        echo "&nbsp;&nbsp;";
    }
    for($st=1;$st<=$i*2-1;$st++){
        echo"*";
    }
    echo"<br>";
}

?>