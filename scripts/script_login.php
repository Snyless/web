<?php
      
       if(isset($_POST['connexion']))
	          {
				    if(!empty($_POST['username']) && !empty($_POST['password']))
					  {
						  $utilisateur=$_POST['username'];
						  $password=sha1($_POST['password']);
						  
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
						  $reponse=$bd->prepare('SELECT * FROM membre where username=? AND password=?');
		                  $reponse->execute(array($utilisateur,$password));
						  $req=$reponse->fetch();
		                  $count=$reponse->rowCount();
						  
						  if($count!=1)
						    {
                              $erreurconnexion="Nom d'utilisateur ou mot de passe incorrect !";
			 
			                }
						  else
						    {  
						       
							   session_start();
							   $_SESSION['username']=$req['username'];
							   $_SESSION['connected']=true;
							   header("Location:index.php");
							}
					  }
					
			    }
?>