<?php include 'scripts/script_inscription.php'; ?>
<?php include 'includes/header.php'; 

?>
<!--sign in start here-->
<div class="signin">
	<div class="container">
		<div class="signin-main">
			<h1>Sign up</h1>
			<h2>Informations</h2>
			<form action="" method="post">
				<div><input type="text" class="no-margin" placeholder="Username" name="username">
              <input type="password" class="no-margin" placeholder="Password" required="" name="password">
                   </div><br>
               <div style="width:45%;display:inline-block;">
                <?php
							    if(isset($erreurpseudoexiste))
								 {
									echo "<font color=rgb(234, 87, 45)><b> $erreurpseudoexiste </b></font>"; 
								 }
                    if(isset($erreurpseudo))
								 {
									echo "<font color=rgb(234, 87, 45)><b> $erreurpseudo </b></font>"; 
								 }
                    
                               ?>
                </div>
                
                 <div style=" width:45%;display:inline-block; margin-left:37px;">
                <?php
							    if(isset($erreurmdp))
								 {
									echo "<font color=rgb(234, 87, 45)><b> $erreurmdp </b></font>"; 
								 }
                                ?>
                </div>
				<div><input type="password" class="no-margin" placeholder="Confirm Password" required="" name="confirmation_password">
                <input type="text" class="no-margin" placeholder="E-mail" name="email"></div>
              <div style="width:45%;display:inline-block;">
                <?php
							    if(isset($erreurconfirmation))
								 {
									echo "<font color=rgb(234, 87, 45)><b> $erreurconfirmation </b></font>"; 
								 }
                     ?></div>
                
                 <div style="width:45%;display:inline-block;margin-left:37px;">
                <?php
                 if(isset($erreurmail))
								 {
									echo "<font color=rgb(234, 87, 45)><b> $erreurmail </b></font>"; 
								 }
							    if(isset($erreurmailexiste))
								 {
									echo "<font color=rgb(234, 87, 45)><b> $erreurmailexiste </b></font>"; 
								 }
                     ?></div>
				<span class="checkbox1">
                    
                    <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>i agree terms of use and privacy</label>
			   </span>
				<input type="submit" value="Submit" name="inscription">
			</form>
		</div>
	</div>
</div>

<!--sign in end here-->
<?php include 'includes/footer.php'; ?>