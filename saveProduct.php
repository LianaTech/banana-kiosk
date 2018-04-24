<?php

require __DIR__ . '/autoload.php';

$message = '';
$result = Product::handleSaveProduct();
if ($result === true) {
	$message = 'Product saved';
} elseif ($result === false) {
	$message = 'Product save failed. Please verify your inputs and try again.';
}

?>
<!DOCTYPE html>
<html>
<head>
	<base href="<?= Conf::$base_uri ?>" />
</head>
<body>
	<form action="saveProduct.php" method="post">
		<p>Save product. TODO implement handleSaveProduct</p>
		<label>Name:  <input type="text" name="name" /></label>
		<label>Price: <input type="text" name="price" /></label>
		<input type="submit" value="Save" />
	</form>
	<?= $message ?>
</body>
</html>