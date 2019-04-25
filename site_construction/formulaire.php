<?php 
  include('connexion_db.php');
$nom= $prenoms= $contact= $email= $catégorie = $localite = "";
$verif= false;
if(isset($_POST['formulaire']))
{
    $nom = $_POST["name"];
    $prenoms = $_POST["last_name"];
    $contact = $_POST["telephone"];
    $email = $_POST["email"];
	$catégorie = $_POST['categorie'];
	//$localite = $_POST[''];
    $requete = $db->prepare('INSERT INTO utilisateur(nom,prenoms,contact,email,catégorie,localite) VALUES(:nom,:prenoms,:contact,:email,:catégorie,:localite)');
	try{	
		$requete->execute(array('nom'=>$nom,'prenoms'=>$prenoms,'contact'=>$contact,'email'=>$email,'catégorie'=>$catégorie,'localite'=>$localite));
	}
	catch(Exception $e){
		/*die('Erreur lors de l\insertion : '.$e->getMessage());*/
	}
	echo "<script>alert('Inscription terminé');</script>"; 
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>formulaire</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=divice-width, initial-scacle-1">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="stylesheet" href="styles.css"/>
		<style>
			
			
form
{
	background-color: blue;
    text-align: center;
	padding-right: 30px;
	padding-left: 0px;
}
.form-control
{
    height: 40px;
    border-radius:30px;
    margin: 20px;    
}

input
{
    font-family: serif;
    font-size: 200px;
}
.button1
{
   height: 45px;
    width: 400px;
    background: red;
    color: #fff;
	float: left;
}
.button2
{
   height: 20px;
    width: 100px;
    background: blue;
    color: #fff;
	float: right;
}

		
		</style>
    </head>
    
    <body>
       
        <div class="container">
           <div class="martial">
			   
			   <div class="col-lg-12 clo-md-12 col-sm-12 col-xs-12">
                   <figure><center><img src="images/images3.jpeg" class="img-responsive"></center>
					
							<!---- <figcaption> </figcaption>-->
					   
				   </figure>
               </div>
			   
			 
			   <b><h2 style=color:maroon><center>Effectuez votre commande</center></h2></b>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    
         <form id="armand" action="" method="POST" role="form" >
             <div class="row">
             
            <div class="col-md-6"> 
           <input placeholder="Nom(Ex: Woyo)" name="name" type="text" required="" class="form-control">
             <span class="help-inline"></span>
             </div>
             
             
             <div class="col-md-6">
            <input placeholder="Prenoms(Ex: L'abbe Martial Armand)" name="last_name" type="text" required="" class="form-control"> 
          <span class="help-inline"></span>
             </div>
             
				 
				 
             <div class="col-md-6">
            <input placeholder="Contact(Ex:53828268) " name="telephone" type="number" required="" class="form-control">
           <span class="help-inline"></span>
             </div>
				 
             
             <div class="col-md-6">
            <input placeholder="Email(Ex:boffo.woyo@uvci.edu.ci)" name="email" type="email" required="" class="form-control">
           <span class="help-inline"></span>
             </div>
             
				 <div class="col-md-6">
					 
				 <select name="categorie" id="categorie" name="text">
					 <option value="construction">     </option>
					 <option value="CONSTRUCTION SANS ACTIVITE HUMAINE">CONSTRUCTION SANS ACTIVITE HUMAINE</option>
					 <option value="MAISON INDIVIDUELLE">MAISON INDIVIDUELLE</option>
					 <option value="BATIMENT A RISQUE ELEVE">BATBATIMENT A RISQUE ELEVEIMENT A RISQUE ELEVE</option>
					  <option value="BATIMENT NECESSAIRE A LA GESTION DE CRISE">BATIMENT NECESSAIRE A LA GESTION DE CRISE</option>
				</select>
					 
					 
             </div>			
				 <div class="col-md-6">
            <input placeholder=" localité " name="localite" type="text" required="" class="form-control">
           <span class="help-inline"></span>
				 
            <div class="col-md-6">                   
           <textarea name="commentaire" id="commentaire" placeholder="Message" required="" class="form-control"></textarea>
			</div>
				<div>
                 <div class="col-md-6">
            <input type="reset" style="color:white" value="ANNULER" class="btn btn-primary buton" class="button1"/>
                 </div>
                 
                 <div class="col-md-6">
            <input type="submit" value="SOUSCRIRE" name="formulaire" class="btn btn-primary buton" class="button2"/>
                 </div>
                 
               </div> 
					 
             </div>
             </div>
         
			 </form>
             </div>
			</div>
            </div>
	</body>
    
</html>