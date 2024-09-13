<?php
class DB
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "libraries");

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql)
    {
        $result = $this->conn->query($sql);

        if ($result === false) {
            echo "Error: " . $this->conn->error;
            return false;
        }

        return $result;
    }
}
