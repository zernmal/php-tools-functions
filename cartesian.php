<?php

function descartes($a ){
	$oarr = array();
	$n = count($a);
	$d = array();
	
	function inc($a, &$d , $n){
		$i = 0;
		while($i < $n){
			if($d[$i] >= count($a[$i]) - 1){
				if($i == $n - 1){
					return false;
				}
				$d[$i] = 0;
				$i ++;
			}else{
				$d[$i] ++;
				return true;
			}
		}
	}

	function pd($a , &$d){
		$n = count($d);
		$x = array();
		for($i = 0; $i < $n; $i ++){
			$x[] = $a[$i][$d[$i]];
		}
		return $x;
	}


	for($i = 0; $i < $n; $i ++){
		$d[] = 0;
	}
	$c = true;
	while($c){
		array_push($oarr, pd($a ,$d));
		$c = inc($a,$d,$n);
	}

	return $oarr;
}


$a = array(
	array(1, 2, 3),
	array(4, 5, 6),
	array(7, 8)
);

echo "<pre>";
print_r(descartes($a));
echo "</pre>";



