<?php
function quadran($x, $y){
    if($x > 0 && $y > 0){
		$quadrant = 1;
	}else if($x < 0 && $y > 0){
		$quadrant = 2;
	}else if($x < 0 && $y < 0){
		$quadrant = 3;
	}else{
		$quadrant = 4;
    }
    
    return $quadrant;
}

// test
echo quadran(-5, 2)."\n";
echo quadran(5, 2)."\n";
echo quadran(-5, -2)."\n";
