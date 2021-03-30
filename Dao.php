<?php


require_once 'KLogger.php';

class Dao
{

    private $host = "us-cdbr-east-03.cleardb.com";
    private $db = "heroku_cd7cbeea5e8005c";
    private $user = "b3798ab574b3fe";
    private $password = "0aecfb19";

    // private $host = "localhost";
    // private $db = "jerry";
    // private $user = "root";
    // private $password = "ljy2000727";

    protected $logger;

    public function __construct()
    {
        $this->logger = new KLogger("log.txt", KLogger::DEBUG);
    }

    /**
     * Get connection status
     * returns a boolean
     */
    public function getConnection()
    {
        try {
            $connection = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->password);
            $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);       //comment out
            $this->logger->LogDebug("Got a connection");                        //comment out
        } catch (PDOException $e) {
            $error = 'Connection failed ' . $e->getMessage();
            $this->logger->LogError($error);                                    //comment out
        }
        return $connection;
    }


  public function userExist ($username, $password) {
    $connection = $this->getConnection();
    try {
        $q = $connection->prepare("select count(*) as total from usr where username = :username and password = :password");
        $q->bindParam(":username", $username);
        $q->bindParam(":password", $password);
        $q->execute();
        $row = $q->fetch();
        if ($row['total'] == 1) {
           $this->logger->LogInfo("user found!" . print_r($row,1));
           return true;
        } else {
           return false;
        }
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
  }

  public function emailExist ($email) {
    $connection = $this->getConnection();
    try {
        $q = $connection->prepare("select count(*) as total from usr where email = :email");
        $q->bindParam(":email", $email);
        $q->execute();
        $row = $q->fetch();
        if ($row['total'] == 1) {
           $this->logger->LogInfo("user found!" . print_r($row,1));
           return true;
        } else {
           return false;
        }
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
  }


  public function insertUser ($username, $email, $password) {
    $conn = $this->getConnection();
    $saveQuery = "insert into usr (username, email, password) values (:username, :email, :password)";

    $q = $conn->prepare($saveQuery);
    $q->bindParam(":username", $username);
    $q->bindParam(":email", $email);
    $q->bindParam(":password", $password);
    $q->execute();
  }

}
