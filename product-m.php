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
<<<<<<< HEAD
            if($_SESSION['connected']=true){
=======
>>>>>>> origin/master
							
						
	$req1=$bd->query('select pr.* from produit pr
		');
						while($data1=$req1->fetch())
						{   if(isset($_POST[$data1['ID']])){
<<<<<<< HEAD
								$d=$bd->query('Insert into panier(ID_prod) values('.$data1['ID'].') ');
=======
								$d=$bd->quezy'Insert into panier values() ');
>>>>>>> origin/master
								
								break;
							}
						}
						
						
						
				
<<<<<<< HEAD
$reponse=$bd->query('select pr.* from produit pr');
=======
$reponse=$req1=$bd->query('select pr.* from produit pr');
>>>>>>> origin/master
		                  $reponse->execute();
                
						  while($req=$reponse->fetch()){
                              ?>
	
			  <div class="col-md-12 product-block">
			      <div class="col-md-4 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="#"><img src="images/h19.jpg" alt="" class=" zoom-img"></a>
					   </div>
<<<<<<< HEAD
					   <h3> <form method="post" action="">
=======
					   <h3> <form method="post" action="produit-m.php">
>>>>>>> origin/master
					   	<button class="btn btn-sm btn-warning pull-right" type="submit" name="<?php echo $req['ID'];?>" >add</button></h3>
						</form><div class="home-product-bottom">
		
								<p> <?php echo $req['nom'];?></p>						
						</div>
						<div class="srch">
							<span><?php echo $req['prix'];?></span>
						</div>
					</div>
				 </div>
<<<<<<< HEAD
			   <?php }} ?>
=======
			   <?php } ?>
>>>>>>> origin/master
			      
			      <div class="clearfix"> </div>
			  </div>
		</div>
	</div>
</div>
<!--product end here-->
<?php include 'includes/footer.php'; ?>