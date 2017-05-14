<?php
                   if(isset($_SESSION['username']))
	                  {  
					     
     	                  try
						    {
							     $bd=new PDO('mysql:host=localhost;dbname=data_projet;charset=utf8','root','',
	                             array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
						    }
			  
                          catch(Exception $e)
						    {
	                             die('Erreur : '.$e->getMessage());
		                    }
					        
?>
		                    <script>
				                document.getElementById("header_internaute").style.display="none"; <!-- faire disparaitre le lien de connexion -->
					            document.getElementById("header_membre").style.display="block"; <!-- faire apparaitre le bouton de profile -->
						    </script>
<?php                       
                            $reponse=$bd->prepare('SELECT * FROM membre where username=?');
		                    $reponse->execute(array($_SESSION['username']));
		                    $req=$reponse->fetch(); /* detection des données du membre connecté */
                            if($req['role']=="administrateur") /* s'il est un prof */ 
					          {
?>                         
                            <script>
					            document.getElementById('header_administrateur').style.display="block"; <!-- apparaitre le bouton plateforme -->
                         document.getElementById('header_produit').style.display="block"; <!-- apparaitre le bouton plateforme -->

                            </script>								
<?php
                              }
							
							  
						    

					  }
?>