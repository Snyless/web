<?php

		 
	if(isset($_POST['inscription']))
	{
      if(!empty($_POST['username'])  && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmation_password']))
		{
			
			
			$username=htmlspecialchars($_POST['username']);
			$email=$_POST['email'];
			$password=$_POST['password'];
			$cpassword=$_POST['confirmation_password'];
			$email=$_POST['email'];
			$mdplength=strlen($password);
		    //filter_var($nom,FILTER_VALIDATE_EAMAIL);
			//rowCount();
			
		          try
				     {
                                $bd=new PDO('mysql:host=localhost;dbname=data_projet;charset=utf8','root','',
	                            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
                     }
					 
                  catch(Exception $e)
					 {
			                    die('Erreur : '.$e->getMessage());
		             }
				if(preg_match( "#^[a-z]+([0-9]|[a-z])+$#" ,$username))
						  {   
    $reponse=$bd->prepare('SELECT count(*) as nbr FROM membre where username=?');
		     $reponse->execute(array($username));
						      $req=$reponse->fetch();	  
 if($req['nbr']==0) 
 {
                       if($password==$cpassword)
				 {
								 if($mdplength>=8)
								   {     
								   if(preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i',$email))
								 {
								  $reponse=$bd->prepare('SELECT count(*) as nbr FROM membre where email=?');
		                                 $reponse->execute(array($email));
						      $req=$reponse->fetch();
				 if($req['nbr']==0)
   {  $date_modification=date("d/m/Y à H:i:s");
													                      /* insertion des données dans la table membre */
				                        $reponse=$bd->prepare('INSERT INTO membre(username,password,role,email,date_modification) 
																						                       VALUES(?,?,?,?,?)');
				                       $reponse->execute(array($username,sha1($password),'client',$email,$date_modification));
																						
$reponse=$bd->prepare('INSERT INTO client(username)
VALUES(?)');
$reponse->execute(array($username));
	
	 $_SESSION['username']=$username;
   header("Location:login.php");
												  
  }
else
								  {
   $erreurmailexiste="Mail est déjà utilisé !";
												         }					 
								 }
								else
				 {
  $erreurmail="L'email n'est pas Valide !"; 
}
 }
  else
{
				  $erreurmdp="Le Mot doit contenir au moins 8 caracteres !";
 }
														  										  
				 }
						
				  else
			              { 
                            $erreurconfirmation="confiramtion du mdp incorrecte !";
			                          }
				}
				else        /* s'il y a une entrée dans la table membre qui contient ce pseudo on va afficher un msg d'erreur avec javascript */
		              {
                    $erreurpseudoexiste="ce pseudo existe deja ! ";
		           }
}
 else
				{
				$erreurpseudo='votre pseudo est invalide !';
				}
      }
					

	}
	      
?>
