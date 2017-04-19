<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset='UTF-8' />
	</head>
	<body>
		<?php
			class User {
				public $name = 'Имя';
				//public $surname = 'Фамилия';
				public $password = 'Пароль';
				public $email = 'Eмейл';
				public $city = 'Город';
				
				function getInfo()
				{
					return $this->name . ' ' . $this->surname;
				}
			}
			
			$class = new User();
			$class->name = 'Alexey ';
			$class->surname = 'Ivanov';
			echo $class->getInfo();
		?>
	</body>
</html>