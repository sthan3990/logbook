<?php
	
	// connect to MySQL server
	
	include 'database.php';
	
	$conn = new database('127.0.0.1', 'logbook', 'root', '');
	$conn->dbConnect();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	
	// Find the username first to see if it's unique 
	$query = $conn->db->prepare('SELECT * FROM credentials WHERE username = :username');
	$query->bindParam(':username', $username);
	$query->execute();

	if($query->rowCount() == 0){
		
		echo "Username is Unique";
				
		$query = 'INSERT INTO credentials (Username, Password, Firstname, Lastname, Email)
                VALUES(:Username,:Password,:Firstname,:Lastname, :Email)';
        
        $statement = $conn->db->prepare($query);
		
		$params = [
				'Username' => $username,
				'Password' => $password,
				'Email' => $email,
				'Firstname' => $firstname,
				'Lastname' => $lastname
			];
		
		$result = $statement->execute($params);
		
		echo "<p>Added to Table</p>" ;
			
	} else { 
	
	  echo "Username is taken";
	  
	}

?>