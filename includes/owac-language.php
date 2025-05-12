<?php 
/**
 * Check link
 */
if(!function_exists('owac_language')){
	function owac_language() {
		
		$language = array(
			'english' => array('name'=>'English','code'=>'en_GB'),
			'french' => array('name'=>'French','code'=>'fr_FR'),
			'german' => array('name'=>'German','code'=>'de_DE'),
			'italian' => array('name'=>'Italian','code'=>'it_IT'),
			'spanish' => array('name'=>'Spanish','code'=>'es_ES'),
			'Hungarian' => array('name'=>'Hungarian','code'=>'hu_HU')
		);
		
		return $language;
	}
}
?>