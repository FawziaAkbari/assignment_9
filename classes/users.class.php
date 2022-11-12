<?php
include 'dbc.class.php';
class Users extends Dbc {
	protected $table_name = '';
	
    // Select User
	public function select($data = [], $one_user = false){
	$query = " SELECT * FROM {$this->table_name}";

		if(count($data)){
			$query .= " WHERE ";
			foreach($data as $col => $val){
				$query .= " {$col} ='{$val}' AND ";
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
		
		$column_data_ = '';
		$values = "";

		foreach ($data as $column => $val) {
			$column_data_ .= " {$column}, ";
			$values .= "'{$val}', ";
		}

		$column_data_ = trim($column_data_, ', ');
		$values = trim($values, ', ');

		$query = " INSERT INTO {$this->table_name} ( $column_data_ ) VALUES ($values) ";

		$user = $this->connection()->query($query);
		return $user;

	}


}