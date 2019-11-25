<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="jazzworldreg.css">
	<meta charset="utf-8">
	<script src="validation.js"></script>
	<meta name="jazzworld" content="width=device-width, initial-scale=1">
	<title>JAZZWORLD REG</title>
	
</head>
<body>
	<header>
		<div class="headercontent">
			<div class="logo">
				<h1>JAZZ<span>WORLD</span></h1>
			</div>
			<nav>
				<a href="jazzworld.php">MAIN</a>
				<a href="OOP.php">CONTACTS</a>
				<div class="dropdown">	
					<button>ACCOUNT</button>
					<div class=dropdown-content>
						<a id="dropdown-link" href="jazzwordlreg.php">Register</a>
					</div>
				</div>
			</nav>
			
		</div>
	</header>

	<form action = "email.php" method = "post"  id="regform">
		<div class="formbackground">
			<div id="heading">
				<h1>Registration Form</h1>
			</div>
			<div class="formfields">
        		<input name="name" class="form" type="text" id="name" placeholder="Name" onfocusout="return validate()"></input>
        		<span id="forname"></span>
      		</div>
		    <div class="formfields">
		        <input name="lastname" class="form" type="text" id="lastname" placeholder="Last Name" onfocusout="return validate()"></input> 
		        <span id="forlastname"></span>
		    </div>
		    <div class="formfields">
		        <input name="email" class="form"  id="email" placeholder="Expamle@gmail.com" onfocusout="return validate()"></input>
		        <span id="foremail"></span>
		    </div>
		    <div class="formfields">
		        <input name="password" class="form" type="password" id="password" placeholder="Password" ></input>
		        <span id="forpassword"></span>		        
		    </div>
		    <div class="radiofields">
		    	<input class="sex" type="radio" name="sex" id="Male" value="m">
		    	<label for="Male">Male</label><br><br>

		    	<input class="sex" type="radio" name="sex" id="Female" value="f">
		    	<label for="Female">Female</label>
			</div>
			<div class="submitbutton">
				<input class="submit" type="submit" value="Submit" name="submit"></input>
			</div>
			<div id="success">
 				<div class="successwindow">
  					<h2>Success!</h2>
  					<p>Registration Complete!</p>
  					<a href=" ">Close</a>
 				</div>
			</div>
		</div>
	</form>
	<footer>
		<div class="footercontent">
			<div class= "footermemo">
			<p>
				&#169 JazzWorld 2019. Created by Vitaliy Asyeyev
			</p>
			</div>
			<nav>
				<a href="jazzworld.html">MAIN</a>
				<a href="">CONTACTS</a>
				<a href="jazzworldreg.html">ACCOUNT</a>
			</nav>
		</div>
	</footer>
<script src="validation.js"></script>
<!-- <script src="validation.js"></script>
<script>
		function resetTimer() {
    			clearTimeout(time);
		 	time = setTimeout(showInstructions, 10000);
		 }

		 function showInstructions() {
		 	alert("Please fill the form in this way: \nName: Vitaliy \nLast Name: Asyeyev \nEmail: RedundantLeck@gmail.com \nPassword - minimum 8 symbols");
		 }

		 var time = setTimeout(showInstructions, 10000);
		 window.addEventListener("load", resetTimer );
		 window.addEventListener("mousemove", resetTimer );
		 window.addEventListener("keypressed", resetTimer );
		 resetTimer();
</script>
<script src="biblio.js"></script>
<script src="biblio_validation.js"></script>
<script>
        $('#regform').validate({
          rules : {
                      password : {
                          minlength : 8

                      },
                      ignore: "*"
                  }
     	});
</script> -->
</body>
</html>