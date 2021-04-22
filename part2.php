<?php
	$max = 40;
?>
<form action="?" method="get">

    <select name="list" id="list">
        <?php 
                for($i=1;$i<$max;$i++) echo '<option value="'.$i.'">'.$i.'</option>';
        ?>
    </select>
    <br>
    <input type="submit" value="valider">
</form>
<?php

if(isset($_GET["list"]))//s'il existe
    if(!empty($_GET["list"])){//non null
        showTable($_GET["list"]);
    }

function ShowTable($x){
    for($i = 0; $i <= 10; $i++)
        echo $i." * ".$x." = ".($x*$i)."<br>";
}
?>

