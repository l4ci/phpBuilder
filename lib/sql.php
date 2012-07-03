<?php
if(!isset($root)) die('Direct access is not allowed');

/** 
 * Returns the last returned insert id
 *
 * @return int
 */
function last_id($connection=false) {
	if($connection){
		return @mysql_insert_id($connection);    
	}else{
		return @mysql_insert_id();    
	}
}

/** 
* Shortcut for mysql_fetch_array
*
* @param  resource  $result the unfetched result from db::query()
* @param  const     $type PHP flag for mysql_fetch_array
* @return array     The key/value result array 
*/
function fetch($result, $type=MYSQL_ASSOC) {
	if(!$result) return array();
	return @mysql_fetch_array($result, $type);
}
?>