<?php 
	//fungsi untuk mengirim perintah ke arduino
	function serial_write($perintah, $arduino)
	{
		require_once("lib/php_serial.class.php");
		$serial = new phpSerial();
		$arduino = (string) $arduino;
		$serial -> deviceSet($arduino);
		$serial -> confBaudRate(9600);
		$serial -> deviceOpen();
		$serial -> sendMessage($perintah, 0);
		$serial -> deviceClose();
		return null;
	}

	function serial_read($perintah, $arduino)
	{
		require_once("lib/php_serial.class.php");
		$serial = new phpSerial();
		$arduino = (string) $arduino;
		$serial -> deviceSet($arduino);
		$serial -> confBaudRate(9600);
		$serial -> deviceOpen();
		$serial -> sendMessage($perintah, 1);
		$data = $serial->readPort();
		$serial -> deviceClose();
		return $data;
	}

?>