<?php
// Database credentials
// $servername = "localhost";
// $username = "atelierd_db";
// $password = "_gRI(VSoZ[C7";
// $dbname = "atelierd_db";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// // Connection successful, no need to echo
?>


<?php
class Database {
    private static $instance = null;
    private $connection;

    private function __construct() {
        $servername = "localhost";
        $username = "atelierd_db";
        $password = "_gRI(VSoZ[C7";
        $dbname = "atelierd_db";

        $this->connection = new mysqli($servername, $username, $password, $dbname);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}
?>
