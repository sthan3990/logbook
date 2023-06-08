<?php

class Guest { 

	public function __construct(string $username) { 
		$this->username = $username;
	
	}
	
	public function getEmail()   { 
	
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
        echo "<p> Email: " . $record['Email'] . "</p>";
    }
			
	}

	public function getIDNumber()   { 
	
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
       echo "<p> ID: " . $record['ID'] . "</p>";
    }
			
		
	}

	public function getfname(){ 
	
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
        echo "<p>Firstname: " . $record['Firstname'] . "</p>";
    }
			
	}
	
	public function getlname()   { 
	
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
        echo "<p>Lastname: " . $record['Lastname'] . "</p>";
    }
			
	}
	
	public function getLogbookInfo() { 
	
	$username = $_SESSION['username'];

	// connect to MySQL server		
	$conn = new database('127.0.0.1', 'logbook', 'root', '');
	
	$conn->dbConnect();
	
	echo "<table border='1'>";
	
	echo "<td>ID</td> ";
	
	echo "<td>Date</td> ";

	echo "<td>Time</td> ";

	echo "<td>Log Entry Text</td> ";

	echo "<tr> </tr> ";
		
	// Show the Status Information
	$rows = $conn->db->query('SELECT ID, date, time, text  FROM logbookentries');
		
	foreach ($rows as $row) {
			for ($i = 0; $i < sizeof($row) / 2; $i++) {
				echo "<td>" . $row[$i] . "</td>";
			}
			echo "<tr> </tr>";
		}
		echo "</table>";	
		
	}
	
 				
		
}
?>
