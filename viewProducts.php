<?php

require __DIR__ . '/autoload.php';

$products = Product::getProducts();

?>
<!DOCTYPE html>
<html>
<head>
	<base href="<?= Conf::$base_uri ?>" />
    <meta charset="utf-8" />
</head>
<body>
	<p>Fresh bananas. TODO implement getProducts</p>
	<?php foreach ($products as $product) { ?>
	<div>
		<p title="TODO product name here" class="product-row">
			<div>
				<label>Name: {TODO product name here}</label>
			</div>
			<div>
				<label>Price: {USD TODO price here in US price format}</label>
			</div>
		</p>
	</div>
	<?php } ?>
</body>
</html>
