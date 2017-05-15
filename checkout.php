<?php include 'includes/header.php'; ?>

<div class="ckeckout">
		<div class="container">
			<h2>Panier</h2>
			<div class="ckeckout-top">
			<div class=" cart-items heading">
<<<<<<< HEAD
			 <h1>Panier</h1>
=======
			 
>>>>>>> origin/master
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
							
						
<<<<<<< HEAD
						$req1=$bd->query('select * from membre where role="client"');
						while($data1=$req1->fetch())
						{   if(isset($_POST[$data1['username']])){
								$delete=$bd->prepare('delete from client where username=?');
								$delete->execute(array($data1['username']));
								$deleted=$bd->prepare('delete from membre where username=?');
								$deleted->execute(array($data1['username']));
=======
	$req1=$bd->query('select pa.*,pr.* from panier pa,produit pr,client c where 
		c.id=pa.ID_clt and pr.ID=pa.ID_prod and c.username="'.$_SESSION['username'].'"
		');
						while($data1=$req1->fetch())
						{   if(isset($_POST[$data1['ID_prod']])){
								$delete=$bd->prepare('delete from panier where ID_prod=?');
								$delete->execute(array($data1['ID_prod']));
>>>>>>> origin/master
								break;
							}
						}
						
						
						
					?>
			  
				
			<div class="in-check">
				<ul class="unit">
<<<<<<< HEAD
					<li><span>Username</span></li>
					<li><span>Date inscription</span></li>		
					<li><span>email</span></li>
					<li><span>Details Edit </span></li>
=======
					<li><span>Produit</span></li>
					<li><span>Prix</span></li>		
					<li><span>Quantité</span></li>
					
>>>>>>> origin/master
					<li> </li>
					<div class="clearfix"> </div>
				</ul>
                <?php
               
<<<<<<< HEAD
						  //requete client !
						  $reponse=$bd->prepare('SELECT * FROM panier,produit where ID=ID_prod');
=======
						  //requete panier !
						  $reponse=$req1=$bd->query('select pa.*,pr.* from panier pa,produit pr,client c where 
		c.id=pa.ID_clt and pr.ID=pa.ID_prod and c.username="'.$_SESSION['username'].'"
		');
>>>>>>> origin/master
		                  $reponse->execute();
                
						  while($req=$reponse->fetch()){
                              ?>
                            <ul class="cart-header simpleCart-shelfItem">
<<<<<<< HEAD
                                <form action="" method="post"> <button class="close3" type="submit" name=<?php echo $req['ID_prod']; ?>></button></form>
                             <li><span class="item_price"><?php echo $req['nom']; ?></span></li>                           
                             <li><span><?php echo $req[' ']; ?></span></li>
                             <li><span class="item_price"><?php echo $req['categorie']; ?></span></li>
                                  <div class="clearfix"> </div>
=======
                     <form action="" method="post">
      <button class="close3" type="submit" name=<?php echo $req['ID_prod']; ?>></button></form>
      <li><span class="item_price"><?php echo $req['nom']; ?></span></li>  
  <li><span class="item_price"><?php echo $req['prix']; ?></span></li>                           
  <li><span><?php echo $req['Quantité']; ?></span></li>
   
     	<div class="clearfix"> </div>
>>>>>>> origin/master
				            </ul>
                
                              
                          
                <?php
                }
                ?>
				
<<<<<<< HEAD
			
				<!--<ul class="cart-header2 simpleCart_shelfItem">
					<div class="close3"> </div>
						<li class="ring-in"><a href="single.php" ><img src="images/c3.jpg" class="img-responsive" alt=""></a>
						</li>
						<li><span>Handbag</span></li>
						<li><span class="item_price">$ 360.00</span></li>
						<li> <a href="#" class="add-cart cart-check item_add">Add to cart</a></li>						
						<div class="clearfix"> </div>
				</ul>-->
=======
>>>>>>> origin/master
			</div>
			</div>  
		 </div>
		</div>
	</div>




















<?php include 'includes/footer.php'; ?>