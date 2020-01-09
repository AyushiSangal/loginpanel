<?php
class DBConnect
{
    private $user = "root";

    private $pass = "root";

    private $host = "localhost";

    private $db   = "abc";

    protected $con;

    /* Function for opening connection */
    public function openConnection()
    {
        try {
            $this->con = new mysqli($this->host,$this->user,$this->pass,$this->db);
            return $this->con;
        } catch (mysqli_sql_exception  $e) {
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }

    /* Function for closing connection */
    public function closeConnection()
    {
        $this->con->close();
    }
}
?>