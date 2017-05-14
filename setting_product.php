<?php include 'includes/header.php'; ?>
<?php include 'modal/add_product.php'; ?>
<div class="ckeckout">
		<div class="container">
			<div class="ckeckout-top">
			<div class=" cart-items heading">
			 <h1><li style="list-style:none;"> <a class="add-cart cart-check item_add"data-toggle="modal" data-target="#add_product">Add Product</a></li>	</h1>
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
								$delete=$bd->prepare('delete from panier where ID_prod=?');
								$delete->execute(array($data1['ID_prod']));
								$deleted=$bd->prepare('delete from (select * from produit p,s_categorie c where p.categorie=c.categorie) where ID=?');
								$deleted->execute(array($data1['ID']));
                            
								break;
							}
						}
						
						
						
					?>
			  
				
			<div class="in-check">
				<ul class="unit">
					<li><span>Product</span></li>
					<li><span>Date inscription</span></li>		
					<li><span>email</span></li>
					<li><span>Details Edit </span></li>
					<li> </li>
					<div class="clearfix"> </div>
				</ul>
                <?php
               
						  //requete client !
						  $reponse=$bd->prepare('SELECT * FROM produit');
		                  $reponse->execute();
                
						  while($req=$reponse->fetch()){
                              ?>
                            <ul class="cart-header simpleCart-shelfItem">
                                <form action="" method="post"> <button class="close3" type="submit" name=<?php echo $req['ID']; ?>></button></form>
                             <li><span class="item_price"><?php echo $req['username']; ?></span></li>                           
                             <li><span><?php echo $req['date_inscription']; ?></span></li>
                             <li><span class="item_price"><?php echo $req['email']; ?></span></li>
                             <li> <a href="#" class="add-cart cart-check item_add">Add to cart</a></li>						

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