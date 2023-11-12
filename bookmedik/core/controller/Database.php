<?php
class Database {
        public static $db;
        public static $con;

        function Database(){
        }

        function connect(){
                $con = new mysqli(getenv('DB_HOST'), getenv('DB_USER'),getenv('DB_PASS'),getenv('DB_NAME'));
                $con->query("set sql_mode=''");
                return $con;
        }

        public static function getCon(){
                if(self::$con==null && self::$db==null){
                        self::$db = new Database();
                        self::$con = self::$db->connect();
                }
                return self::$con;
        }
}
?>
