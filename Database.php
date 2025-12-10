<?php

class Database
{
    protected $host;
    protected $user;
    protected $password;
    protected $db_name;
    protected $conn;

    public function __construct()
    {
        $this->loadConfig();
        $this->connect();
    }

    private function loadConfig()
    {
        include __DIR__ . "/../config.php";
        $this->host = $config['host'];
        $this->user = $config['username'];
        $this->password = $config['password'];
        $this->db_name = $config['db_name'];
    }

    private function connect()
    {
        $this->conn = new mysqli(
            $this->host,
            $this->user,
            $this->password,
            $this->db_name
        );

        if ($this->conn->connect_error) {
            die("Gagal konek DB: " . $this->conn->connect_error);
        }
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }

    public function getAll($table)
    {
        $result = $this->conn->query("SELECT * FROM $table");
        return $result;
    }

    public function insert($table, $data)
    {
        $cols = implode(",", array_keys($data));
        $vals = "'" . implode("','", array_values($data)) . "'";

        $sql = "INSERT INTO $table ($cols) VALUES ($vals)";
        return $this->conn->query($sql);
    }
}

?>
