<?php

require __DIR__ . '/autoload.php';

$status_message = '';
$result = Product::handleFileUpload();
if ($result === true) {
	$status_message = 'Products imported';
} elseif ($result === false) {
	$status_message = 'Product import failed';
}

?>
<!DOCTYPE html>
<html>
<head>
	<base href="<?= Conf::$base_uri ?>" />
</head>
<body>
	<form action="importProducts.php" method="post" enctype="multipart/form-data">
		<p>Import products. TODO implement handleFileUpload</p>
		<input type="file" name="upload" />
		<input type="submit" value="Send" />
	</form>
	<?= $status_message ?>
</body>
</html>