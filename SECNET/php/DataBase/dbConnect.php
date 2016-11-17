<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class DbMgmt {
   
    private $connection;
    private $_host = "localhost";
    private $_username = "secnet";
    private $_password = 'N0pa$$word';
    private $_database = "SEC_NET";
    
    //Constructor
    public function __construct() {
        $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
        
        //Error Handling
        if(mysqli_connect_error()) {
            trigger_error("Failed to connect to Database: " . mysqli_connect_error(), E_USER_ERROR);
        }
        
    }
    
    public function close() {
        $this->connection->close();
        
    }
    
    public function runQuery($qry) {
        $result = $this->connection->query($qry);
        return $result;
    }
    
    public function quote($value) {
        return $this->connection->real_escape_string($value);
    }
    
    public function select($query) {
        $rows = array();
		$result = $this ->runQuery($query);
		if($result === false) {
			return false;
		}
		while ($row = $result->fetch_asoc()) {
			$rows[] = $row;
		}
		return $rows;
    }
    
    
    
    
    
}

?>
