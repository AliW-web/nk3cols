<?php
	function section1() {
		global $Wcms;

		// Check if the section1 area is already exists, if not, create it
		if (empty($Wcms->get('blocks','section1'))) {
			$Wcms->set('blocks','section1', 'content', 'Your content here.');
		}

		// Fetch the value of the section1 from database
		$value = $Wcms->get('blocks','section1','content');

		// If value is empty, let's put something in it by default
		if (empty($value)) {
			$value = 'Empty content';
		}
		if ($Wcms->loggedIn) {
			// If logged in, return block in editable mode
			return $Wcms->block('section1');
		}

		// If not logged in, return block in non-editable mode
		return $value;
	}
	function section2() {
		global $Wcms;

		// Check if the section2 area is already exists, if not, create it
		if (empty($Wcms->get('blocks','section2'))) {
			$Wcms->set('blocks','section2', 'content', 'Your content here.');
		}

		// Fetch the value of the section2 from database
		$value = $Wcms->get('blocks','section2','content');

		// If value is empty, let's put something in it by default
		if (empty($value)) {
			$value = 'Empty content';
		}
		if ($Wcms->loggedIn) {
			// If logged in, return block in editable mode
			return $Wcms->block('section2');
		}

		// If not logged in, return block in non-editable mode
		return $value;
	}
	function section3() {
		global $Wcms;

		// Check if the section3 area is already exists, if not, create it
		if (empty($Wcms->get('blocks','section3'))) {
			$Wcms->set('blocks','section3', 'content', 'Your content here.');
		}

		// Fetch the value of the section3 from database
		$value = $Wcms->get('blocks','section3','content');

		// If value is empty, let's put something in it by default
		if (empty($value)) {
			$value = 'Empty content';
		}
		if ($Wcms->loggedIn) {
			// If logged in, return block in editable mode
			return $Wcms->block('section3');
		}

		// If not logged in, return block in non-editable mode
		return $value;
	}
?>
