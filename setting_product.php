<?php include 'includes/header.php'; ?>
<?php include 'modal/add_product.php';
      include 'modal/modif_product.php';    
?>
<div class="ckeckout">
		<div class="container">
		
				<h2 >Gestion Produits</h2>
			<div class="ckeckout-top">
			<div class=" cart-items heading">
			 <h1><li style="list-style:none;"> <a class="add-cart cart-check item_add"data-toggle="modal" data-target="#add_product">
			 	Add Product</a></li>	</h1>
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
							
						
						$req1=$bd->query('select * from produit');
						while($data1=$req1->fetch())
						{   if(isset($_POST[$data1['ID']])){
                            $deleted=$bd->prepare('delete from s_categorie where categorie in(select categorie from produit where ID= ?)');
								$deleted->execute(array($data1['ID']));
								$delete=$bd->prepare('delete from produit where ID=?');
								$delete->execute(array($data1['ID']));
								
                            
								break;
							}
						}
						
						
						
					?>
			  
				
			<div class="in-check">
				<ul class="unit">
					<li><span>Produit</span></li>
					
					
					<li><span>pour</span></li>			
					<li><span>Prix</span></li>
					<li><span>modifier</span></li>
					<div class="clearfix"> </div>
				</ul>
                <?php
               
						  //requete client !
						  $reponse=$bd->prepare('SELECT * FROM produit p,s_categorie ');
		                  $reponse->execute();
                
						  while($req=$reponse->fetch()){
                              ?>
                            <ul class="cart-header simpleCart-shelfItem">
                                <form action="" method="post"> 
                              <button class="close3" type="submit" name=<?php echo $req['ID']; ?>></button></form>
                             <li><span class="item_price"><?php echo $req['nom']; ?></span></li>                           
                             <li><span><?php echo $req['categorie']; ?></span></li>
                             <li><span class="item_price"><?php echo $req['prix']; ?></span></li>
                             <li> <a class="add-cart cart-check item_add"data-toggle="modal" data-target="#modif_product">modifier</a></li>						

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