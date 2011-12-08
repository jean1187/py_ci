<?php

class MY_DB_mysql_driver extends CI_DB_mysql_driver {

  function __construct($params){
      echo "asasas ";
    parent::__construct($params);
    log_message('debug', 'Extended DB driver class instantiated!');
  }
  
  	function _execute($sql)
	{
		//$sql = $this->_prep_query($sql);
                echo "asasas ";
		//return @mysql_query($sql, $this->conn_id);
	}

        
  function get_first($table)
   {
     return $this->limit(1)->get($table);
   }

}
?> 