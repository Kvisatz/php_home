<?php 
    // print_r($_POST["number"]);
    $mass = $_POST["number"];
    if(isset($mass) && is_array($mass)){
        renderListNames($mass);
    }
    function renderListNames($mass){
        echo "<ul>";
        for($i=0; $i < count($mass); $i++){
            echo "<li>$mass[$i]</li>";
        }
        echo "</ul>"; 
    }
?>