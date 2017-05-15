<?php include 'includes/header.php'; ?>
<!--product start here-->
<div class="product">
	<div class="container">
		<div class="product-main">
			  <div class=" product-menu-bar">
			    	<div class="col-md-3 prdt-right">
					
				</div>
			  </div>	
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

            if($_SESSION['connected']=true){
		
						
	$req1=$bd->query('select pr.* from produit pr');
						while($data1=$req1->fetch())
						{   if(isset($_POST[$data1['ID']])){


								$d=$bd->query('Insert into panier values("'.$req['id'].'",'.$data1['ID'].',1) ');
								break;
							}
						}
						



$reponse=$bd->query('select pr.* from produit pr');

		                  $reponse->execute();
                
						  while($req=$reponse->fetch()){
                              ?>
	
			  <div class="col-md-12 product-block">
			      <div class="col-md-4 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="#"><img src="images/h19.jpg" alt="" class=" zoom-img"></a>
					   </div>

					   <h3> <form method="post" action="">

					   	<button class="btn btn-sm btn-warning pull-right" type="submit" name="<?php echo $req['ID'];?>" >add</button></h3>
						</form><div class="home-product-bottom">
		
								<p> <?php echo $req['nom'];?></p>						
						</div>
						<div class="srch">
							<span><?php echo $req['prix'];?></span>
						</div>
					</div>
				 </div>

			   <?php }} ?>


			      
			      <div class="clearfix"> </div>
			  </div>
		</div>
	</div>
</div>
<!--product end here-->
<?php include 'includes/footer.php'; ?>