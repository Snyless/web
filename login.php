<?php include "scripts/script_login.php"; ?>
<?php include 'includes/header.php'; ?>
<!--log in start here-->
<div class="login">
	<div class="container">
		<div class="login-main">
			  <h1>Login</h1>
		  <div class="col-md-6 login-left">
			<h2>Existing User</h2>
			<form action="" method="post">
				<input type="text" placeholder="Username" required="" name="username">
				<input type="password" placeholder="Password" required="" name="password">
                <div>
              
								<?php
							    if(isset($erreurconnexion))
								 {
									echo "<font color=rgb(234, 87, 45)><b> $erreurconnexion </b></font>"; 
								 }
                                ?>
                </div>
				<input type="submit" value="Login" name="connexion">
              
			</form>
		  </div>
		  <div class="col-md-6 login-right">
		  	 <h3>New User? Create an Account</h3>
		  	 <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system. and expound the actual teachings of the great.</p>
		     <a href="signup.php" class="login-btn">Create an Account </a>
		  </div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--log in end here-->
<?php include 'includes/footer.php';
?>