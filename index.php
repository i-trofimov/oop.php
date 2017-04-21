<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset='UTF-8' />
	</head>
	<body>
		<?php
			trait Hello
			{
				public function sayHello()
				{
					echo 'Hello';
				}
			}
			
			trait World
			{
				public function sayWorld()
				{
					echo 'World';
				}
			}
			
			class myHelloWorld
			{
				use Hello, World;
			}
			
			$obj = new myHelloWorld();
			$obj->sayHello();
			$obj->sayWorld();
		?>
	</body>
</html>