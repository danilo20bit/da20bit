
	<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username =="ADMIN" && $password=="ADMIN"){
	echo '<script type="text/javascript">';
echo ' alert("YOU ARE LOGGING TODAY")';
echo '</script>';


}
else{
	echo '<script type="text/javascript">';
echo ' alert("WRONG PASSWORD!")';
echo '</script>';
}
?>
  
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="css/style.css">    
</head>    
<body>    
    <h2>Login Page</h2><br>    
    <div class="login">    
   <form method="POST" action="indexx.php">
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="username" placeholder="username"/>    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
       <input type="password" name="password" placeholder="password"/>   
        <br><br>    
        <input type="submit"/>
	</form>

        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>    
        Forgot <a href="#">Password</a>    
    </form>     
</div>    
</body>    
</html>     
</body>
</html>