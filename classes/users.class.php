<?php
include 'dbc.class.php';
class Users extends Dbc {
	protected $table_name = 'users';
	
    // Select User
	public function select($data = [], $one_user = false){
	$query = " SELECT * FROM {$this->table_name}";

		if(count($data)){
			$query .= " WHERE ";
			foreach($data as $col => $val){
				$query .= " {$col}='{$val}' AND ";
			}
			$query = trim($query, ' AND ');
		}
		$result = $this->connection()->query($query);

		if($one_user){
			return $result->fetch_assoc();
		}else{
			return $result->fetch_all(MYSQLI_ASSOC);
		}
		
	}

    // Insert User
	public function insert($data){
		
		$col = "";
		$val = "";

		foreach ($data as $col => $val) {
			$col .= " {$col}, ";
			$val .= "'{$val}', ";
		}
		$col = trim($col, ', ');
		$val = trim($val, ', ');
		$query = " INSERT INTO {$this->table_name} ( $col ) VALUES ($val) ";
		$result2 = $this->connection()->query($query);
		return $result2;
		

	}


}