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
			
			class User1 {
				private static $name;
				
				public static function setName($name1)
				{
					self::$name = $name1;
				}
				
				public static function getName()
				{
					return self::$name;
				}
			}
			
			User1::setName('Alex');
			echo User1::getName();
		
		?>
	</body>
</html>