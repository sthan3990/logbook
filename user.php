<?php

	require_once __DIR__ . '/guest.php';
	
	require_once __DIR__ . '/user.php';
	
class User extends Guest { 
 
	public function __construct(string $username) { 
	
	$this->username = $username ;
	
	}
	
	
	public function getPassword () { 
	
	
	$username = $_SESSION['username'];

	// connect to MySQL server		
	$conn = new database('127.0.0.1', 'logbook', 'root', '');
	
	$conn->dbConnect();
	
	// Find the email
	$query = $conn->db->prepare('SELECT * FROM credentials WHERE username = :username');
	
	$query->bindParam(':username', $username);
	
	$query->execute();
							
    $records = $query->fetchAll();
	
	//Specify the col_name
	
    foreach($records as $record)
    {
        echo "<p> Password: " . $record['Password'] . "</p>";
    }	
	
	}
	
	public function setPassword() { 

	
	$username = $_SESSION['username'];
	
	$newpassword = $_POST['newPassword'];
	
	// connect to MySQL server		 
	$conn = new database('127.0.0.1', 'logbook', 'root', '');
    $conn->dbConnect();
	
	// Try updating password
	try{ 
		

		// Find the username
		$query = $conn->db->prepare('SELECT * FROM credentials WHERE username = :username');
		
		$query->bindParam(':username', $username);
		
		$query->execute();
		
		// Username is found - update the password
			if($query->rowCount() != 0){
			
			// Begin a transaction
			$conn->db->beginTransaction();
	
			echo "Username Found";
			
			$query = 'UPDATE credentials
					  SET Password = :Password
					  WHERE Username = :Username';
					  
			$statement = $conn->db->prepare($query);

			$statement->bindValue('Password', $newpassword);
			$statement->bindValue('Username', $username);
			
			 if (!$statement->execute()) {
                throw new Exception("Error - exeption thrown in try block");
            }
			
			// Commit the transaction
            $conn->db->commit();			
			echo "<p>Updated Password</p>" ;
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
		echo"<p>Failed to update password</p>";
		
		$conn->db->rollBack();
	}
	
	}
	
	public function setEmail() { 

	$username = $_SESSION['username'];
	
	$newemail = $_POST['newEmail'];
	
	// connect to MySQL server		 
	$conn = new database('127.0.0.1', 'logbook', 'root', '');
    $conn->dbConnect();
	
	// Try updating email
	try{ 
		// Find the username
		$query = $conn->db->prepare('SELECT * FROM credentials WHERE username = :username');
		
		$query->bindParam(':username', $username);
		
		$query->execute();
		
		// Username is found - update the password
			if($query->rowCount() != 0){
			
			// Begin a transaction
			$conn->db->beginTransaction();
	
			echo "Username Found";
			
			$query = 'UPDATE credentials
					  SET Email = :Email
					  WHERE Username = :Username';
					  
			$statement = $conn->db->prepare($query);

			$statement->bindValue('Email', $newemail);
			$statement->bindValue('Username', $username);
			
			 if (!$statement->execute()) {
                throw new Exception("Error - exeption thrown in try block");
            }
			
			// Commit the transaction
            $conn->db->commit();			
			
			} 
			
			else { 
				
				// Rollback the transaction
				$conn->db->rollBack();
			}
	}
	
	// Recognize mistake and roll back changes
	catch (Exception $e){
		
		$conn->db->rollBack();
	}
	
	}
	
	public function setLogbook() { 

	$conn = new database('127.0.0.1', 'logbook', 'root', '');
	
	$conn->dbConnect();
	
	$username = $_SESSION['username'];
	$logbookentry = $_POST['logbooktext'];

	$query = 'INSERT INTO logbookentries (date, time, text)
                VALUES(:date,:time,:text)';
        
	$statement = $conn->db->prepare($query);
	
	$curr_date_query = $conn->db->query('SELECT CURRENT_DATE()');
	
	$curr_date = $curr_date_query->fetch(PDO::FETCH_ASSOC);
	
	$curr_time_query = $conn->db->query('SELECT CURRENT_TIME()');
	$curr_time = $curr_time_query->fetch(PDO::FETCH_ASSOC);

	$params = [
			'date' => $curr_date['CURRENT_DATE()'],
			'time' => $curr_time['CURRENT_TIME()'],
			'text' => $logbookentry,
		];
	
	$result = $statement->execute($params);
	
	
	}
	

	
}




?>
