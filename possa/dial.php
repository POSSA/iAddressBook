<?php

/*** *** *** *** *** *** *** *** *** *** *** ***
Click to Dial integration for iAddressBook
To bridge an call between internal extension 100 and external
number 555-1212, 
http://<ip_address>/<path>/dial.php?IN=100&OUT=5551212


License: GNU GPL/2

Version History:
2014-01-15		Initial commit by lgaetz
 
*** *** *** *** *** *** *** *** *** *** *** ***/



// load config from external file
require('config.php');

// load and initialize Ajam class
require_once('Ajam.php');
$ajam = new Ajam($config);

if ($ajam) {
	/* Debug purposes only
	echo "ajam connection success</p>";
	$ajam->doCommand('ping');
	$test = $ajam->getResult();
	echo $test['Response']."</p>";  // will echo 'Success' if command was successful
	*/

	$inbound_channel=$_REQUEST['IN'];
	$outbound_number=$_REQUEST['OUT'];

	// remove non-digits from number
	$pattern = '/[^0-9]*/';
	$outbound_number = preg_replace($pattern,'', $outbound_number);

	if ($outbound_number == "" || $inbound_channel == "") {
		echo "IN and OUT arguments missing</p>";
	}
	else {
		$dial = array();
		$dial['Channel'] = "local/$inbound_channel@from-internal";
		$dial['Context'] = 'from-internal';
		$dial['Exten'] = $outbound_number;
		$dial['Priority'] = '1';
		$dial['Async'] = 'yes';
		$dial['Timeout'] = '30000';
		$dial['CALLERID'] = '"iAddressBook"';
		$test = $ajam->doCommand('originate', $dial);
	}
}
else {
	echo "AJAM connection failed</p>";
}


	