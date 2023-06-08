<!DOCTYPE html>
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
    

        <title>Registration</title>
        <meta name="description" content="This is the registration page" />
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

			<!-- Load the Navigation Bar wit PHP include function --> 
					<?php 
					include('navigation.php');
					?>
						
				</div>
            </div> 
            
            <div class="row">       

    <!-- Main Section Two EQUAL Columns --> 

	<div class="col-md-12" style='background-color: white'>	

		<h1 class="text-center text-bold">Login Registration</h1>
		<br >
	
	<!-- Make two equal sections -->
	<div class="row">
	
	<!--  COLUMN 1 - Form Element Section -->
	
		<div class="col-md-6">	
		
		<form id="ReqAccess" action="../add2database.php" method="post">	
		
		  <div class="form-group">
			<label for="fname">First name: <abbr title="This field is mandatory">*</abbr></label>
			<input id="fname" class="text_input" type="text" required name="fname">
			<br>
			<p id=fnameFeedback></a>
		  </div>
		 		 
		 <div class="form-group">
			<label for="lname">Last Name: <abbr title="This field is mandatory">*</abbr></label>
			<input id="lname" class="text_input" type="text" required name="lname">
			<br>
			<a id=lnameFeedback></a>
		  </div>
		 
		 <div class="form-group">
			<label for="email">Email: <abbr title="This field is mandatory">*</abbr> </label>
			<input id="email" class="text_input" type="text" required name="email">
			<br>
			<a id=emailFeedback></a>
		  </div>
		  
		 <div class="form-group">
			<label for="username">Username: <abbr title="This field is mandatory">*</abbr></label>
			<input id="username" class="text_input" type="text" required name="username">
			<br>
			<a id=usernameFeedback></a>
		  </div>
		 
		 <div class="form-group">
		 <label for="password">Password: <abbr title="This field is mandatory">*</abbr></label>
		  <input type="password" id="password" required name="password" >
		</div> 

		 <div class="form-group">

		
		<!-- If there are error messages them submit button doesn't work -->
		<input type='submit' value='Submit' onclick='return submitButtonCheck();'>
		 
		 </div> 

		</form>

			<script src="../js/ValidateRegistration.js"></script>
	
		</div>
		
		
		<!--  COLUMN 2 - Error Checker Section -->

		<div class="col-md-6">	
		
			<p><b>Proper Examples: </b> mysite@url.com,    my.url@site.org    mysite@url1.url2.url3 </p>
		  <h3>Email must contain the following:</h3>
			<p id="lengthEMAIL" class="invalidEMAIL">Minimum <b>5 characters</b></p>
			<p id="patternEMAIL" class="invalidEMAIL">Proper Formatting</p>
		
		<br>

		  <h3>Password must contain the following:</h3>
			  <p id="letterPSWD" class="invalidPSWD">A <b>lowercase</b> letter</p>
			  <p id="capitalPSWD" class="invalidPSWD">A <b>capital (uppercase)</b> letter</p>
			  <p id="numberPSWD" class="invalidPSWD">A <b>number</b></p>
			  <p id="lengthPSWD" class="invalidPSWD">Minimum <b>8 characters</b></p>
			  
		</div>
		
		
		<!-- FOOTER PORTION --> 
		
		</div>
		</div>
                    <div class="row">
						<div class="col-md-12">
							<div class="container-bg">
                            <footer class="text-light text-center" id='foot'></footer>
							<script src="../js/DateObjectModel.js"></script>
                            </div>
                        </div>
                     </div>
            </div>
        </div>
</body>
    
</html>