<?php

function isPalindrome($text){
    $text = str_split($text);
	$index=0;
	$palindrom=true;
	
	$pTeks=count($text);
	
	$i=0;
	while(($i<$pTeks/2) && ($palindrom==true)){
		if($text[$index]==$text[$pTeks-1]){
			$index++;
			$pTeks--;
		}else{
			$palindrom=false;
		}
		
		$i++;
	}
	
	return $palindrom;
}

$case = "ada apa dengan kakak kakak lari sejak malam ada ada saja";

foreach(explode(" ", $case) as $word){
    var_dump([
        $word,
        isPalindrome($word)
    ]);
}
