<?php
class Database{
  
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "tecbib";
    private $username = "tecbib";
    private $password = "tecbib";
    public $conn;

    // get the database connection error
    function exception_error_handler($errno, $errstr, $errfile, $errline ) {
        throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
        set_error_handler("exception_error_handler");
    }
  
    // get the database connection
    public function getConnection(){
  
        $this->conn = null;
  
        try {
            $this->conn = @pg_connect("host=' . $this->host . ' dbname=' . $this->db_name . ' user='.$this->username.' password='$this->password'"); 
        } Catch (Exception $e) {
            Echo $e->getMessage();
        }
        return $this->conn;
    }

    // test the database connection
    public function tryConnection(){

        $db_handle = Database::getConnection();
        if ($db_handle) {
            echo 'Connection attempt succeeded.';
        } else {
            echo 'Connection attempt failed.';
        }
        echo "<h3>Connection Information</h3>";
        echo "DATABASE NAME:" . pg_dbname($db_handle) . "<br>";
        echo "HOSTNAME: " . pg_host($db_handle) . "<br>";
        echo "PORT: " . pg_port($db_handle) . "<br>";
        pg_close($db_handle);
    }
}
?>

<?php Database::tryConnection() ?>