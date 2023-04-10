<?php
class User
{
    public  $username;
    protected $id;

    private $password;


    public function __construct($username,$password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->processInfomation();
    }
    protected function processInfomation()
    {
        return $this->info = $this->name.' is '.$this->age.' years old';
    }

    public function getInfo() {
        return $this->info;
    }
}

$user = new User();

$user->setAge("Nam", 20);
echo $user->getInfo();

?>

