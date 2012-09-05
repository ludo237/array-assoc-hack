<?php
/**
 * array_push_assoc is a moch-up of the standard core.php Array Push
 * @param array $array
 * @param object $key
 * @param object $value
 * @return array $array
 */
public function array_push_assoc(&$array, $key, $value){
	// Simply insert the key and the value into the array
	$array[$key] = $value;
	return $array; // return it 
}
?>