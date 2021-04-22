<?php
showTab(8);
function showTab($x){
    for($i = 0; $i <= 10; $i++)
        echo " ". $i ." * " . $x . " = " . ($i*$x) . "<br>";
}

?>