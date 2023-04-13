<?php
namespace Test\Blog; 
// session_start();
use mysqli;
class Database
{

    protected $connection;
    public function __construct($dbhost = 'localhost', $dbuser = 'root', $dbpass = '', $dbname = 'learning')
    {
        $this->connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        if ($this->connection->connect_error) {
            die('kết nối thất bại' . $this->connection->connect_error);
        }
    }

    public function connect() {
		return $this->connection;
	}

    public function close() {
		return $this->connection->close();
	}
}
?>
