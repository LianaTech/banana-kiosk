<?php

// Database connection handling is implemented here.
class DB {
	protected static $handle;

	function getDBHandle() {
		if (!isset(self::$handle)) {
			$dbh = new PDO('mysql:host=localhost;dbname=banana_kiosk', 'bananaman', '');
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			self::$handle = $dbh;
		}
		return self::$handle;
	}
}
