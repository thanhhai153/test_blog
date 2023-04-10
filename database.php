<?php
class database
{

    protected $connection;
    public function __construct($dbhost = 'localhost', $dbuser = 'root', $dbpass = '', $dbname = 'learning')
    {
        $this->connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        if ($this->connection->connect_error) {
            die('kết nối thất bại' . $this->connection->connect_error);
        }
        return $this->connection;
    }
    public function close() {
		return $this->connection->close();
	}
}
?>
