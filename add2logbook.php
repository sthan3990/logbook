<?php
	// connect to MySQL server
	include 'database.php';
	
	session_start();

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
	
	echo "<p>Added Logbook Entry</p>" ;
	
	echo "<p>Go back<a href=\"logbook.php\">here</a></p>";


?>