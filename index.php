<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset='UTF-8' />
	</head>
	<body>
		<?php
			class User {
				public $name;
				public $password;
				public $email;
				public $city;
				
				public function __construct($name, $password, $email, $city) {
					$this->name = $name;
					$this->password = $password;
					$this->email = $email;
					$this->city = $city;
				}
				
				public function getInfo() {
					return "{$this->name};" . "{$this->password};" . "{$this->email};" . "{$this->city};";
				}
			}
			
			$user1= new User('Alex', '123456', 'alex@email.com', 'Moscow');
			echo $user1->getInfo();
		
		?>
	</body>
</html>