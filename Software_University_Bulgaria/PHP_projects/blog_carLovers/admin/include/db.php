<?php

	class Db {
		
		private $host;
		private $user;
		private $passowrd;
		private $theDb;
		private $myConnection;
		private $sql;
		
		
			public function __construct($host,$user,$password,$theDb){
				
				$this->myConnection = mysqli_connect($host,$user,$password,$theDb);
					if($this->myConnection){
						echo "";
					} else {
						
						echo "We are not connected".mysqli_error($this->myConnection);
					}
				
				
			}
			
			public function executeTheQuery($sql){
				
				$executeQuery = mysqli_query($this->myConnection,$sql);
					if(!$executeQuery){
						echo "Query failed".mysqli_error($this->myConnection);
					}
					
				return $executeQuery;	
			}
		
			public function displyCategories($procesedData){
				$category_title = $row['cat_title'];
				$disply="<li><a href='#'>{$category_title}</a>/li>";
				
				echo $disply;
			}
		
		
	}
	


?>