<?php
/**
 * Copyright 2012 6GO s.r.l.
 *
 * Licensed under the GPL, Version 3.0 (the "GPLv3"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *    http://www.gnu.org/copyleft/gpl.html
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 * @author Claudio Ludovico Panetta
 * @version 0.1 
 */

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