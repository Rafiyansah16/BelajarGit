<?php

function lalulintas($noLampu, $kondisiTerminasi, $kt1, $kt2, $kt3, $kt4, $kt5, $kt6, $kt7, $kt8, $kt9, $kt10){
    for($noLampu; $noLampu <= $kondisiTerminasi; $noLampu++){
        if($noLampu == $kt3 || $noLampu == $kt5 || $noLampu == $kt7 || $noLampu == $kt8){
            echo "Lampu lalu lintas no $noLampu tidak berfungsi <br/>";
        } else if($noLampu == $kt1 || $noLampu == $kt2 || $noLampu == $kt4 || $noLampu == $kt6 || $noLampu == $kt10){
            echo "Lampu lalu lintas no $noLampu tidak lancar <br/>";
        } else if($noLampu == $kt9){
            echo "Lampu lalu lintas no $noLampu sedang diperbaiki <br/>";
        } else {
            echo "Lampu lalu lintas no $noLampu lancar <br/> ";
        }
    }
}




echo lalulintas(1, 20, 2, 4, 5, 10, 11, 12, 13, 14, 16, 18);

?>