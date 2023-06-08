<?php

	include 'database.php'; 

	// connect to the database 
	$conn = new database('127.0.0.1', 'logbook', 'root', '');
	$conn->dbConnect();
		
	$conn->db->beginTransaction();

	try { 
			
		// Show the Status Information
		$rows = $conn->db->query('SELECT Username FROM credentials');
			
		foreach ($rows as $row) {
				for ($i = 0; $i < sizeof($row) / 2; $i++) {
					echo  $row[$i] ;
				}
				echo "<br>";
			}
			
		}
	
		
		
			
	
	
	catch (Exception $e){
		$conn->db->rollBack();
    }
		
?>
