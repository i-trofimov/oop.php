<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset='UTF-8' />
	</head>
	<body>
		<?php
			class User 
			{
				public $name;
				public $password;
				public $email;
				public $city;
				
				public function __construct($name, $password, $email, $city) 
				{
					$this->name = $name;
					$this->password = $password;
					$this->email = $email;
					$this->city = $city;
				}
				
				public function getInfo() 
				{
					$information = "{$this->name};" . "{$this->password};" . "{$this->email};" . "{$this->city};";
					return $information;
				}
			}
			
			class Moderator extends User
			{
				public $info;
				public $rights;
				
				public function __construct($name, $password, $email, $city, $info, $rights)
				{
					parent::__construct($name, $password, $email, $city);
					$this->info = $info;
					$this->rights = $rights;
				}
				
				public function getInfo()
				{
					$information = parent::getInfo();
					$information .= "{$this->info};" . "{$this->rights};";
					return $information;
				}
			}
			
			//$moder = new Moderator('Alexandr', '654321', 'moder@email.com', 'Moscow', 'Moderator', 'True');
			//echo $moder->getInfo();
			
			class User1
			{
				public static $name;
			}
			
			User1::$name = 'Alexandr ';
			#echo User1::$name;
			
			echo phpinfo();
		?>
	</body>
</html>