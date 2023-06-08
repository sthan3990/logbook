<!DOCTYPE html>

<!-- Read the JSON File to see if user exists -->

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
        <meta name="description" content="This is the Sign in page" />
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
					include('navigation.php');
					?>
						
				</div>
            </div> 
            
    <!-- Main Section Two EQUAL Columns --> 

	<div class="col-md-12" style='background-color: white'>	

        <h1 class="text-muted text-center">Login Page</h1>
		
		<br>
	
		<div class="row"> 

	<!--  COLUMN 1 - Login  Section -->
	
		<div class="col-md-6">	
	
			
           <form action="../authenticate.php" method="post" id="access">
		
			<div class="form-group">
			<label for="username">Username: </label>
			<input id="username" class="text_input" type="text" required name="username">
			<br>
			</div>
			
			<div class="form-group">
			<label for="password">Password: </abbr></label>
		    <input type="password" id="password" name="password">
		    <br>
			</div>
			
		<!-- If there are error messages them submit button doesn't work -->
			<div class="form-group">
			<input type='submit' value='Login' onclick='return submitButtonCheck();'>
			
			</div>
			
		
			</form>
		 
		 
		<script src="../js/ValidateLogin.js"></script>
		
		
			<div class="form-group-info">
			<p>Username must contain the following:</p>
			  <p align="right" id="lengthUSER" class="invalidPSWD">Minimum <b>5 characters</b></p>
		
			</div>
		</div>
		

		<!--  COLUMN 2 - Error Checker Section -->

		<div class="col-md-6">	

		<ul> 
		<li>'Guest' level access (view only): Enter the logbook username without entering a password</li>
		<li>'User' level access (view and edit): Enter the logbook username and password </li>
		</ul>
		<b> Usernames Found... </b>
		<br>
		<!-- Function to retrieve available usernames -->
		<?php 
			include('getusernames.php');
		?>

		</div>
		

        </div>
       </div> 
	   </div>
	   
		<div class="row">
			<div class="col-md-12 text-center">
                            <footer class="text-light" id='footer'></footer>
							<script src="../js/DateObjectModel.js"></script>
                            </div>
                        </div>
                     </div>
		  </div>
</body>
    
</html>