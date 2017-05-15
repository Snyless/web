<?php include 'includes/header.php'; ?>

<div class="ckeckout">
		<div class="container">
			<h2>Panier</h2>
			<div class="ckeckout-top">
			<div class=" cart-items heading">
			 
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
							
						
	$req1=$bd->query('select pa.*,pr.* from panier pa,produit pr,client c where 
		c.id=pa.ID_clt and pr.ID=pa.ID_prod and c.username="'.$_SESSION['username'].'"
		');
						while($data1=$req1->fetch())
						{   if(isset($_POST[$data1['ID_prod']])){
								$delete=$bd->prepare('delete from panier where ID_prod=?');
								$delete->execute(array($data1['ID_prod']));
								break;
							}
						}
						
						
						
					?>
			  
				
			<div class="in-check">
				<ul class="unit">
					<li><span>Produit</span></li>
					<li><span>Prix</span></li>		
					<li><span>Quantité</span></li>
					
					<li> </li>
					<div class="clearfix"> </div>
				</ul>
                <?php
               
						  //requete panier !
						  $reponse=$req1=$bd->query('select pa.*,pr.* from panier pa,produit pr,client c where 
		c.id=pa.ID_clt and pr.ID=pa.ID_prod and c.username="'.$_SESSION['username'].'"
		');
		                  $reponse->execute();
                
						  while($req=$reponse->fetch()){
                              ?>
                            <ul class="cart-header simpleCart-shelfItem">
                     <form action="" method="post">
      <button class="close3" type="submit" name=<?php echo $req['ID_prod']; ?>></button></form>
      <li><span class="item_price"><?php echo $req['nom']; ?></span></li>  
  <li><span class="item_price"><?php echo $req['prix']; ?></span></li>                           
  <li><span><?php echo $req['Quantité']; ?></span></li>
   
     	<div class="clearfix"> </div>
				            </ul>
                
                              
                          
                <?php
                }
                ?>
				
			</div>
			</div>  
		 </div>
		</div>
	</div>




















<?php include 'includes/footer.php'; ?>