<?php 
/* states schema generated on: 2011-10-11 20:10:11 : 1318378211*/
class statesSchema extends CakeSchema {
	var $name = 'states';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $states = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 3, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'country_id' => array('type' => 'string', 'null' => false, 'default' => 'US', 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'state_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'state' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);
}
?>