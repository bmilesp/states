<?php
/* States Test cases generated on: 2011-09-21 11:47:50 : 1316620070*/
App::import('Controller', 'States.States');

class TestStatesController extends StatesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class StatesControllerTestCase extends CakeTestCase {
	var $fixtures = array('');

	function startTest() {
		$this->States =& new TestStatesController();
		$this->States->constructClasses();
	}

	function endTest() {
		unset($this->States);
		ClassRegistry::flush();
	}

}
