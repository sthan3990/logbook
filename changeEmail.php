<?php
	include 'database.php';

	session_start();
	
	$username = $_SESSION['username'];
	$newEmail = $_POST['newEmail'];
	
	// connect to MySQL server		 
	$conn = new database('127.0.0.1', 'logbook', 'root', '');
    $conn->dbConnect();
		
	echo $newEmail ;
	
	// Try updating the email
	try{ 
		
		echo "Changing Email for User:, " . $_SESSION['username'] . "!<br /b>";

		// Find the username
		$query = $conn->db->prepare('SELECT * FROM credentials WHERE username = :username');
		
		$query->bindParam(':username', $username);
		
		$query->execute();
		
		// Username is found - update the email 
			if($query->rowCount() != 0){
			
			// Begin a transaction
			$conn->db->beginTransaction();
	
			echo "Username Found";
			
			$query = 'UPDATE credentials
					  SET Email = : Email
					  WHERE Username = :Username';
					  
			$statement = $conn->db->prepare($query);
	
			// change the values 
			
			$statement->bindValue('Email', $newEmail);
			$statement->bindValue('Username', $username);
			
			 if (!$statement->execute()) {
                throw new Exception("Error - exeption thrown in try block");
            }
			
			// Commit the transaction
            $conn->db->commit();			
			echo "<p>Updated Email</p>" ;
			echo "<p>Go back<a href=\"logbook.php\">here</a></p>";


			} 
			
			else { 
				echo "Username Not Found";
				
				// Rollback the transaction
				$conn->db->rollBack();
			}
	}
	
	// Recognize mistake and roll back changes
	catch (Exception $e){
		echo"<p>Failed to update email</p>";
		
		$conn->db->rollBack();
	}
?>
