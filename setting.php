<?php include 'includes/header.php'; ?>

<div class="ckeckout">
		<div class="container">
			<div class="ckeckout-top">
			<div class=" cart-items heading">
			 <h1><li style="list-style:none;"> <a href="#" class="add-cart cart-check item_add">Add to cart</a></li>	</h1>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header1').fadeOut('slow', function(c){
							$('.cart-header1').remove();
						});
						});	  
					});
			   </script>
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
							$('.cart-header2').remove();
						});
						});	  
					});
			   </script>
				
			<div class="in-check">
				<ul class="unit">
					<li><span>Username</span></li>
					<li><span>Date inscription</span></li>		
					<li><span>email</span></li>
					<li><span>Details Edit </span></li>
					<li> </li>
					<div class="clearfix"> </div>
				</ul>
                <?php
                 try
						    {
							     $bd=new PDO('mysql:host=localhost;dbname=data_projet;charset=utf8','root','',
	                             array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
						    }
			  
                          catch(Exception $e)
						    {
	                             die('Erreur : '.$e->getMessage());
		                    }
						  //requete client !
						  $reponse=$bd->prepare('SELECT * FROM client');
		                  $reponse->execute();
                
						  while($req=$reponse->fetch()){
                              
                              echo '<ul class="cart-header2 simpleCart-shelfItem">';
                              echo '<div class="close3"> </div>';
                                echo '<li class="ring-in"><a href="single.php"><img src="images/c3.jpg" class="image-responsive" alt=""></a>';
                              echo '<li><span>handbag</span></li>';
                              echo '<li><span class="item_price">'.$req['username'].'</span></li>';
                                  echo'<li> <a href="#" class="add-cart cart-check item_add">Edit Profile</a></li>						
						<div class="clearfix"> </div>
				</ul>';
                              
                          }
                
                
                ?>
				
			
				<ul class="cart-header2 simpleCart_shelfItem">
					<div class="close3"> </div>
						<li class="ring-in"><a href="single.php" ><img src="images/c3.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span>Handbag</span></li>
						<li><span class="item_price">$ 360.00</span></li>
						<li> <a href="#" class="add-cart cart-check item_add">Add to cart</a></li>						
						<div class="clearfix"> </div>
				</ul>
			</div>
			</div>  
		 </div>
		</div>
	</div>




















<?php include 'includes/footer.php'; ?>