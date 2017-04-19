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
				public $password = 'Пароль';
				public $email = 'Eмейл';
				public $city = 'Город';
			}
			
			$admin = new User();
			echo $admin->name;
			
			echo '<br/><br/>';
			
			$user1 = new User();
			$user1->name = 'Вася';
			$user1->password = 'qwerty';
			$user1->email = 'vasya@admin.ru';
			$user1->city = 'Moscow';
			$user1->surname = 'Ivanov';
			echo $user1->name . ', ' . $user1->surname . ', ' . $user1->password . ', ' . $user1->email . ', ' . $user1->city;
		?>
	</body>
</html>