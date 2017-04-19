<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset='UTF-8' />
	</head>
	<body>
		<?php
			class ShoppingCard {
				
			}
			
			$product1 = new ShoppingCard();
			$product2 = new ShoppingCard();
			$product3 = new ShoppingCard();
			
			var_dump($product1 instanceof ShoppingCard);
			var_dump($product2 instanceof Card);
			var_dump($product3);
		?>
	</body>
</html>