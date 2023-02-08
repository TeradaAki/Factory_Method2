<?php 
abstract class DatabaseConnectionFactory 
{ 
    
    class MySQLConnection implements DBConnection 
    { 
        public function prepare() { 
            return "{Result of the MySQLConnectionFactory}"; 
        } 
        public function executeQuery() { 
            return "{Result of the MySQLConnectionFactory}"; 
        } 
        public function unload() { 
            return "{Result of the MySQLConnectionFactory}"; 
        } 
    } 

    class SQLServerConnection implements DBConnection { 
        public function prepare() { 
            return "{Result of the SQLServerConnectionFactory}"; 
        } 
        public function executeQuery() { 
            return "{Result of the SQLServerConnectionFactory}"; 
        } 
        public function unload() { 
            return "{Result of the SQLServerConnectionFactory}"; 
        } 
    } 

    class MariaDBConnection implements DBConnection { 
        public function prepare() { 
            return "{Result of the MariaDBConnectionFactory}"; 
        } 
        public function executeQuery() { 
            return "{Result of the MariaDBConnectionFactory}"; 
        } 
        public function unload() { 
            return "{Result of the MariaDBConnectionFactory}"; 
        } 
    } 

    class OracleDBConnection implements DBConnection { 
        public function prepare() { 
            return "{Result of the OracleDBConnectionFactory}"; 
        } 
        public function executeQuery() { 
            return "{Result of the OracleDBConnectionFactory}"; 
        } 
        public function unload() { 
            return "{Result of the OracleDBConnectionFactory}"; 
        } 
    } 

    class IngresDBConnection implements DBConnection { 
        public function prepare() { 
            return "{Result of the IngresDBConnectionFactory}"; 
        } 
        public function executeQuery() { 
            return "{Result of the IngresDBConnectionFactory}"; 
        } 
        public function unload() {
             return "{Result of the IngresDBConnectionFactory}"; 
        } 
    } 

    class PostgreSQLConnection implements DBConnection { 
        public function prepare() { 
            return "{Result of the PostgreSQLConnectionFactory}"; 
        } 

        public function executeQuery() { 
            return "{Result of the PostgreSQLConnectionFactory}"; 
        } 

        public function unload() {
            return "{Result of the PostgreSQLConnectionFactory}"; 
        } 
    } 

    class CassandraDBConnection implements DBConnection { 
        public function prepare() { 
            return "{Result of the CassandraDBConnectionFactory}"; 
        } 
        public function executeQuery() { 
            return "{Result of the CassandraDBConnectionFactory}"; 
        } 
        public function unload() { 
            return "{Result of the CassandraDBConnectionFactory}"; 
        }
    }
}
?>
