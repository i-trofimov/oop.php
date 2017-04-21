<?php
namespace Home;
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

$user = new User('Alexey', '123456', 'alexey@email.com', 'Kiev');
echo $user->getInfo();
?>