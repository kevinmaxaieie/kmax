<?php
	function decimal($var) {
		$result = number_format($var/100,2);
		return $result;
	}
	echo decimal(45643);
?>