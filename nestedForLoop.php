<?php
echo "<TABLE border='1'>";
for ($i=1;$i<=20;$i++){
    
    echo "<TR>";
    
    for ($j=1; $j<5; $j++) {
        echo "<TD>row $i, col$j</TD>";
        
    }
    echo "</TR>";
    
}
echo"</TABLE>";

?>