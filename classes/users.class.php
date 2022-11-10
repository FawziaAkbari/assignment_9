<?php
include 'dbc.class.php';
class Users extends Dbc {
	protected $table_name = 'users';
	
    // Select User
	public function select($data = [], $one_user = false){
	$query = " SELECT * FROM {$this->table_name}";

		if(count($data)){
			$query .= " WHERE ";
			foreach($data as $column => $value){
				$query .= " {$column}='{$value}' AND ";
			}
			$query = trim($query, ' AND ');
		}
		$result = $this->connection->query($query);

		if($one_user){
			return $result->fetch_assoc();
		}else{
			return $result->fetch_all(MYSQLI_ASSOC);
		}
		
	}

    // Insert User
	public function insert($data){
		
		$column = '';
		$value = "";

		foreach ($data as $column => $value) {
			$column .= " {$column}, ";
			$value .= "'{$value}', ";
		}
		$column = trim($column, ', ');
		$value = trim($value, ', ');
		$query = " INSERT INTO {$this->table_name} ( $column ) VALUES ($value) ";
		$this->connection->query($query);
		return $this->connection->insert_id;

	}


}