<?php include 'includes/header.php'; ?>

<div class="ckeckout">
		<div class="container">
			<div class="ckeckout-top">
			<div class=" cart-items heading">
			 <h1>Panier</h1>
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
							
						
						$req1=$bd->query('select * from membre where role="client"');
						while($data1=$req1->fetch())
						{   if(isset($_POST[$data1['username']])){
								$delete=$bd->prepare('delete from client where username=?');
								$delete->execute(array($data1['username']));
								$deleted=$bd->prepare('delete from membre where username=?');
								$deleted->execute(array($data1['username']));
								break;
							}
						}
						
						
						
					?>
			  
				
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
               
						  //requete client !
						  $reponse=$bd->prepare('SELECT * FROM panier,produit where ID=ID_prod');
		                  $reponse->execute();
                
						  while($req=$reponse->fetch()){
                              ?>
                            <ul class="cart-header simpleCart-shelfItem">
                                <form action="" method="post"> <button class="close3" type="submit" name=<?php echo $req['ID_prod']; ?>></button></form>
                             <li><span class="item_price"><?php echo $req['nom']; ?></span></li>                           
                             <li><span><?php echo $req[' ']; ?></span></li>
                             <li><span class="item_price"><?php echo $req['categorie']; ?></span></li>
                                  <div class="clearfix"> </div>
				            </ul>
                
                              
                          
                <?php
                }
                ?>
				
			
				<!--<ul class="cart-header2 simpleCart_shelfItem">
					<div class="close3"> </div>
						<li class="ring-in"><a href="single.php" ><img src="images/c3.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span>Handbag</span></li>
						<li><span class="item_price">$ 360.00</span></li>
						<li> <a href="#" class="add-cart cart-check item_add">Add to cart</a></li>						
						<div class="clearfix"> </div>
				</ul>-->
			</div>
			</div>  
		 </div>
		</div>
	</div>




















<?php include 'includes/footer.php'; ?>