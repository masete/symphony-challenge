<?php
/**
 * The meaning of the word multiplier is a factor that 
 * amplifies or increases the base value of something 
 * else. For example, in the multiplication statement 3 × 4 = 12 
 * the multiplier 3 amplifies the value of 4 to 12.
 */

class Multiplier{

    
    function ms($arr){
        $returning = 0;
        
        foreach($arr as $num){
            $returning += ($num%4 == 0 || $num%6 ==0) ? 1 : 0;
    }

    return $returning;
}
}