<?php
session_start();

   $con = mysqli_connect('localhost','root');
   	// if($con){
   	// 	echo"connection";
   	// }
   	mysqli_select_db($con,'test');
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style type="text/css">
	.animateuse{
			animation: leelaanimate 0.5s infinite;
		}

@keyframes leelaanimate{
			0% { color: red },
			10% { color: yellow },
			20%{ color: blue }
			40% {color: green },
			50% { color: pink }
			60% { color: orange },
			80% {  color: black },
			100% {  color: brown }
		}
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

input {
    background: transparent;
    width: 200px;
    padding: 1em;
    margin-bottom: 2em;
    
    
    
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

   </head>
   <body>
        <div class="container text-center" >
     	<br><br>
    	<h1 class="text-center text-success text-uppercase animateuse" > Results</h1>
    	<br><br><br><br>
      <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="bg-dark"> <h1 class="text-white"> Results </h1></th>
      		
      	</tr>
      	<tr>
		      	<td>
		      		Thank you for attempting the Test
		      	</td>

	        
    		<tr>
    			<td>
    				Your Total score will updated soon
    			</td>
    			 </td>
            </tr>


      </table>

      	<a href="logout.php" class="btn btn-success"> LOGOUT </a>
      </div>
   </body>
</html>












