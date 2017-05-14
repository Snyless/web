<?php
if(isset($_POST['add_group'])){
     
    $nom=$_POST['nom'];
    $genre=$_POST['genre'];
    $prix=$_POST['prix'];
    $categorie=$_POST['categorie'];
    try
						    {
							     $bd=new PDO('mysql:host=localhost;dbname=data_projet;charset=utf8','root','',
	                             array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
						    }
			  
                          catch(Exception $e)
						    {
	                             die('Erreur : '.$e->getMessage());
		                    }
							
						
						$req1=$bd->prepare('INSERT INTO produit(nom,categorie,prix) VALUES(?,?,?)');
                        $req1->execute(array($nom,$genre,$prix));
                        $req1=$bd->prepare('INSERT INTO s_categorie(categorie,s_categorie) VALUES(?,?)');
                        $req1->execute(array($genre,$categorie));
       header("Location:../setting_product.php");

    
    
}
?>