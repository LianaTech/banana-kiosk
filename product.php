<?php

// TODO add PhpDoc to functions
class Product {
	
	function getProducts() {
		// TODO return all products from the database, ordered by id
		return [];
	}
	
	function handleSaveProduct() {
		if ('POST' === $_SERVER['REQUEST_METHOD']) {
		// TODO read values and give them as parameters to addProduct
		// Allow both comma and dot as decimal separators in input, but save prices as numeric
		// Make sure app does not crash if input price is not numeric
		
			if (Product::addProduct($price, $name)) {
				return true;
			} else {
				return false;
			}
		}
		return null;
	}

	function addProduct($price, $name) {
		// TODO add product to the database with given price and name. Prevent SQL injections. Return true when successful
	}
	
	function importProducts($file) {
		// TODO import new products from the given file.
		// Remember to check encoding, always save in UTF-8
		// Allow prices with varying decimal separators in input, but save always as numeric
		// Skip invalid rows (no name or price)
		// return true

		// Hints: For those new to PHP, mb_detect_encoding and utf8_encode can be used to handle the encodings for our example CSVs.
		//   Note that because PHP is what it is, mb_detect_encoding strict parameter must be given as true
		//   or the function doesn't perform all that well.
	}

	function handleFileUpload() {
	
		if (!empty($_FILES['upload']) && empty($_FILES['upload']['error'])) {
			$file_path = $_FILES['upload']['tmp_name'];
			if (self::importProducts($file_path)) {
				return true;
			} else {
				return false;
			}
		}
		return null;
	}
}
