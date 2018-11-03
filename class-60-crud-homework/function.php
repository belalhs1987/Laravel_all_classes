<?php
	class dbConnectionClass
	{
		public $hostname = "localhost";
		public $user = "root";
		public $password = "";
		public $database = "tabulation_sheet";
		public $connection;

		public function __construct()
		{
			$this->connection= new mysqli($this->hostname,$this->user,$this->password,$this->database);
		}

		public function insert($insert){
			$return= $this->connection->query($insert);
			if($return){
				 throw new exception;
		}
	}
	
public function select($select){
		$return = $this->connection->query($select);
		if($return){
			return $return;
		}
	}

	

	
}
$connectionObject= new dbConnectionClass;
?>