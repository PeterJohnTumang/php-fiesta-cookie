<?php
    function hpSum($hp1, $hp2, $hp3, $hp4, $hp5, $hp6, $hp7, $hp8, $hp9, $hp10){
        echo $hp1 + $hp2 + $hp3 + $hp4 + $hp5 + $hp6 + $hp7 + $hp8 + $hp9 + $hp10;
    }

    echo " The sum of hp is ", hpSum(45, 60, 80, 39, 58, 78, 44, 59, 79, 50), ".";
    echo '<br>';
    echo '<br>';
    
    function averageAttack($attack1, $attack2, $attack3, $attack4, $attack5, $attack6, $attack7, $attack8, $attack9, $attack10){
     $sum = $attack1 + $attack2 + $attack3 + $attack4 + $attack5 + $attack6 + $attack7 + $attack8 + $attack9 + $attack10;
    echo $sum/10;
    }
    echo "The average of attack is ", averageAttack(49, 62, 82, 52, 64, 84, 48, 63, 83, 20), ".";
?>