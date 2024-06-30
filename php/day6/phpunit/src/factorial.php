<?php
class factorial 
{ 
    public function fact($n) 
    { 
        if (!(is_int($n)) || $n < 0  || $n == false ) {
            return null; 
        }
        
        if ($n === 0 || $n === 1) { 
            return 1; 
        } else { 
            $ans = 1; 
            for ($i = 1; $i <= $n; $i++) {
                $ans *= $i; 
            }
            return $ans; 
        } 
    } 
}
?>