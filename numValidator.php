<?php
	function decimal($var) {
		$result = number_format($var/100,2);
		return $result;
	}
	$result = decimal(45643);
	echo result;
?>