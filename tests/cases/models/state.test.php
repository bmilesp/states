<?php
/* State Test cases generated on: 2011-09-21 11:43:44 : 1316619824*/
App::import('Model', 'States.State');

class StateTestCase extends CakeTestCase {
	var $fixtures = array('');

	function startTest() {
		$this->State =& ClassRegistry::init('State');
	}

	function endTest() {
		unset($this->State);
		ClassRegistry::flush();
	}

}
