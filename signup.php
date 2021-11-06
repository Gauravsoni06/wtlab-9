<?php 

	$con = mysqli_connect('localhost','root');
	if($con){
		
	}

	mysqli_select_db($con,'test');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
    <style>
        <style>
        input[type=button], input[type=submit], input[type=reset] {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        }        
        

body {
  background-color: #d5e1df;
  height: 100vh;
  font-family: 'Montserrat', sans-serif;
}

.container {
  position: absolute;
  transform: translate(-50%,-50%);
  top: 50%;
  left: 50%;
}

  input {
    background: transparent;
    width: 200px;
    padding: 1em;
    margin-bottom: 2em;
    border: none;
    
    
  }
  
  


::placeholder {
  font-family: Montserrat, sans-serif;
  font-weight: 400;
  color: #fff;
  text-shadow: 2px 2px 4px rgba(0,0,0,0.4);
}




a,
input:focus,
select:focus,
textarea:focus,
button:focus {
    outline: none;
}

        </style>

    </style>
</head>
<body>
<div class="container">
		<h1 class="text-center"> Welcome to online test </h1><br>
<div class="col-lg-11">
				<div class="card">
					<h4 class="card-header text-center"> SignUp Form </h4>
					<br>
					<form action="registration.php" method="post">
						<div class="form-group">
							<label for="user "> Username: </label>
							<input type="text" name="user" id="user" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass "> Password: </label>
							<input type="password" name="pass" id="pass" class="form-control">
						</div>
						<button class="btn btn-success d-block m-auto" type="submit"> Register </button>
						<div class="duplicate"> </div>
					</form>

				</div>
			</div>
				</div>
			</div>
</body>
</html>