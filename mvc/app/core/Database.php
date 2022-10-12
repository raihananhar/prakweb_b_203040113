<?php 

class Database {
    private $host = DB_HOST;
    private $user =  DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    
    private $dbh;
    private $stat;
    

    public function __construct() {

        //data source name
        $dsn = 'mysql:host=' . $this->host .';dbname=' . $this->db_name;

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($query) {
        $this->stat = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null) {
        if ( is_null($type) ) {
            switch( true ) {
                case is_null($value) :
                    $type = PDO::PARAM_INT;
                    break;

                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;

                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;

                case is_string($value) :
                    $type = PDO::PARAM_STR;
                    break;
            }
        }

        $this->stat->bindValue($param, $value, $type);
    }

    public function execute() {
        $this->stat->execute();
    }

    public function resultSet() {
        $this->execute();
        return $this->stat->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single() {
        $this->execute();
        return $this->stat->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount() {
        return $this->stat->rowCount();
    }
    
}