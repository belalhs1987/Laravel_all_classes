 <?php
	class db_class{
		public $hostname = "localhost";
		public $user = "root";
		public $password = "";
		public $database = "test2";
		public $connection;
		
		public function __construct(){
			$this->connection = new mysqli($this->hostname,$this->user,$this->password,$this->database);
			
			if(!$this->connection){
				echo "connected";
			}
		}
		
		public function insert($insert_query){
			$return = $this->connection->query($insert_query);
			if($return){
				throw new exception;
			}
		}
		 
                public function select($select_query){
			$return = $this->connection->query($select_query);
			if($return){
				return $return;
			}
		} 
		
	}
	
	$db_class = new db_class;

?>