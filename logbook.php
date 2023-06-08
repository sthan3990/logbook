<html>
  
    <head>
    <!-- Link Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!-- For Social Media Icons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  
	
	<!-- Link Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
	
	<!-- Link JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
        <title>Forms: Sign in</title>
        <meta name="description" content="Logbook Page" />
		<meta name="robots" content="noindex nofollow" />  <!-- do not want page or any of its links to be indexed -->
		<meta http-equiv="author" content="Stephen Han" />
        <meta http-equiv="pragma" content="no-cache" /> <!-- want browser to reload this page every time -->

    </head>
    <body>
    <!-- Container has margins but container-fluid does not -->
	<div class="container-fluid">
	
		<div class="container-bg">

		<!-- Top of the Page --> 
		<div class="row" >
		
		<!-- Container-bg to set background color --> 
				<div class="col-md-12">
					<div class="page-header">
						<br>
						<h1 class="text-light">Software Final</h1>
						<h5 class="text-light">By: Stephen Han</h5>
					</div>
				</div>
			</div>
			<br>
			
			<div class="row">
				<div class="col-md-12">	

			<!-- Load the Navigation Bar wit hPHP include function --> 
					<?php 
					
					session_start();
					
					$permission_level = $_SESSION['accesslevel'];
						
					$var1 = "User";
					$var2 = "Guest";
					
					// USER LEVEL ACCESS 

					IF (strcmp($permission_level, $var2) != 0) { 

					include('navigationU.php');

					}
					
					ELSE { 
					include('navigation.php');
					}
					
					?>
						
				</div>
            </div> 
            
    <!-- Main Section --> 
	
	<div class="row">       

	<div class="col-md-12" style='background-color: white'>	

    <h1 class="text-center text-muted" >Members Only Page</h1>
	
	
	
	<br> 
	
	<div class = "row">
	
	<?php
	
    include 'database.php';
	
	require_once __DIR__ . '/guest.php';
	
	require_once __DIR__ . '/user.php';
	
	$permission_level = $_SESSION['accesslevel'];
		
	$var1 = "User";
	$var2 = "Guest";

	// USER LEVEL ACCESS 
	IF (strcmp($permission_level, $var2) != 0) { 
				
		// left section of the screen 
	
		echo '<div class="col-md-6">' ;
		
		echo "Welcome, " . $_SESSION['username'] . "<br>USER LEVEL<br>";
		
		echo '
			
			<h3> Update Profile </h3>


			<div class="form-group">
			
			<form method="post">

			<div class="form-group">
			
			<label for="newPassword">Password: </label>
			
		    <input type="password" id="newPassword" name="newPassword">
		    <br>
			</div>
			
			<div class="form-group">

			<input type="submit" name="submitPass" value="Update"  id="submitPass">

			</div>
			
			<br>
			<br>
			<br>
			
			<div class="form-group-text">
			 <b>Password must contain the following:</b>
			  <p id="letterPSWD" class="invalidPSWD">A <b>lowercase</b> letter</p>
			  <p id="capitalPSWD" class="invalidPSWD">A <b>capital (uppercase)</b> letter</p>
			  <p id="numberPSWD" class="invalidPSWD">A <b>number</b></p>
			  <p id="lengthPSWD" class="invalidPSWD">Minimum <b>8 characters</b></p>
			</div>
			
			</form>
		
			</div>


			<div class="form-group">

			<br>
			<br>
			
			<form method="post">
			
			<div class="form-group">
			
			<label for="newEmail">Email: </label>
			
		    <input type="text" id="newEmail" name="newEmail">
			
		    <br>
			
			<div class="form-group">

			<input type="submit" name="submitEmail" value="Update"  id="submitEmail">

			</div>

		    <br>
				
			<div class="form-group-text">
			
			<b>Email must contain the following:</b>
			<p id="lengthEMAIL" class="invalidEMAIL">Minimum <b>5 characters</b></p>
			<p id="patternEMAIL" class="invalidEMAIL">Proper Formatting</p>
		
			</div>
			
			</form>

			</div>
			
			<br>
			<br>
			

		
			<h3 align="left"> Add to Logbook </h3>

			<form method="post">
			
			<div class="form-group-text">
				<textarea id="logbooktext" rows="10" cols="30" name="logbooktext"> 
				</textarea> 
				
			<div id="charactersRemaining">180 characters</div>
	
			<script src="../js/ValidateLogbookPage.js"></script>

						
			<br>
			
			<input type="submit" value="Add" name="submitLogbook" id="submitLogbook" >

			
			</form>

						</div>

		';
		
		echo '</div>';
	
		echo '</div>';

		echo "<br>";
		
		echo '<div class="col-lg-6">' ;

		// right section of the screen 
		
		echo "<h2> Profile </h2> ";
		
		$User1 = new User($_SESSION['username']);
				
		$Guest1 = new Guest($_SESSION['username']);

		$User1 -> getIDnumber();
		
		$User1 -> getfname();
		 
		$User1 -> getlname();
		
		$User1 -> getPassword();

		$User1 -> getEmail();
		
		echo "<h2> Logbook Entries </h2> " ;

		$User1 -> getLogbookInfo() ; 
		
		echo '</div>';
		
		echo '</div>';

	}
	
	$Guest1 = new Guest($_SESSION['username']);

	$User1 = new User($_SESSION['username']);

	if(isset($_POST['submitPass'])) {
		$User1->setPassword();
	
	}
	
	
	if(isset($_POST['submitEmail'])) {
		$User1->setEmail();
	
	}
	
	if(isset($_POST['submitLogbook'])) {
		
		$User1->setLogbook();
	
	}
	
	// GUEST LEVEL ACCESS 
	ELSEIF (strcmp($permission_level,$var1) != 0 ) { 
		
		echo "<div class='col-lg-12'>" ;

		echo "Welcome, " . $_SESSION['username'] . "<br>GUEST LEVEL<br>";
		
		echo "<br>";
		
		echo "<h2> Profile </h2> ";
		

		$Guest1 -> getIDnumber();
		
		$Guest1 -> getfname();
		 
		$Guest1 -> getEmail();
		
		echo "	<h2> Logbook Entries </h2> " ;

		$Guest1 -> getLogbookInfo() ; 
		
	}
		
    ?>
	
</div>
	
</body>
    
</html>