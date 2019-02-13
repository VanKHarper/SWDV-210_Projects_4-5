<!------------------------------------------------------------------------------
  Modification Log
  Date          Name            Description
  ----------    -------------   -----------------------------------------------
  2-12-2019      VHarper      Initial Deployment.
  ----------------------------------------------------------------------------->
<?php

// Sets up database login or throws an error if failed

class Database {
    private static $dsn = 'mysql:host=localhost;dbname=contact_form';
    private static $username = 'root';
    private static $password = 'Pa55w0rd';
    private static $db;
    
    private function __construct() {}
    
    //Logins into DB or throws an error
    public static function getDB() {
        if (!isset(self::$db)){
            try {
                self::$db = new PDO(self::$dsn, self::$username, self::$password);

            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                /* include('database_error.php'); */
                echo "DB Error: " . $error_message; 
                exit();
            }
        }
        return self::$db;
    }
}
?>
