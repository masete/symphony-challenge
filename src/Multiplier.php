<?php

class Multiplier{

    
    function ms($arr){
        $returning = 0;
        
        foreach($arr as $num){
            $returning += ($num%4 == 0 || $num%6 ==0) ? 1 : 0;
    }

    return $returning;
}
}