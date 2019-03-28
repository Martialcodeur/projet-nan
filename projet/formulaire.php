<?php 
  include('connexion_db.php');
$nom= $prenom= $contact= $email= $cp = $trans = "";
$verif= false;
if(isset($_POST['formulaire']))
{
    $nom = $_POST["name"];
    $prenom = $_POST["last_name"];
    $contact = $_POST["telephone"];
    $email = $_POST["email"];
//	$cp = $_POST['compte_principal'];
	$trans = $_POST['transfert'];
    $requete = $db->prepare('INSERT INTO user(nom,prenom,email,contact,transfert) VALUES(:nom,:prenom,:email,:contact,:transfert)');
	try{	
		$requete->execute(array('nom'=>$nom,'prenom'=>$prenom,'email'=>$email,'contact'=>$contact,'transfert'=>$trans));
	}
	catch(Exception $e){
		die('Erreur lors de l\insertion : '.$e->getMessage());
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
    </head>
    
    <body>
       
        <div class="container">
           <div class="martial">
			   
			   <div class="col-lg-12 clo-md-12 col-sm-12 col-xs-12">
                   <figure><center><img src="images/garba2.jpg" class="img-responsive"></center>
					
							<!---- <figcaption> </figcaption>-->
					   
				   </figure>
               </div>
			   
			 
			   <b><h2 style=color:maroon>Effectuez votre commande</h2></b>
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
            <input placeholder="Prénoms(Ex: L'abbe Martial Armand)" name="last_name" type="text" required="" class="form-control"> 
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
					 
					 
<!--
            <input placeholder="préférence " name="compte_principal" type="number" required="" class="form-control">
           <span class="help-inline"></span>
-->
				 
					 
				 <select name="pays" id="pays">
					 <option value="Garba">     </option>
					 <option value="Garba">Garba</option>
					 <option value="Foutou">Foutou</option>
					 <option value="Foufou">Foufou</option>
					
					 
					 
					 </select>
					 
					 
             </div>
				 
				 
				 <div class="col-md-6">
            <input placeholder=" Quantité " name="transfert" type="number" required="" class="form-control">
           <span class="help-inline"></span>
					 
				 <!--- <div class="col-md-">
				 <select name="pays" id="pays">
				 <optgroup label="Europe">
				     <option value="France">France  </option>
				     <option value="Angleterre"> Angleterre </option>
					 <option value="Irlande"> Irlande </option>
					 <option value="Espagne">Espagne  </option>
					 <option value="Italie"> Italie </option>
             </div> --->
				 
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
            </div>
              
           
    </body>
    
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 compatiment1">
                    <h1>Contactez nous</h1>
                    <ul>
                        <li><a href="#"><span class="fa fa-facebook"></span><span class="site1">Labbe martial</span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span><span class="site1"> @armand</span></a></li>
                        <li><a href="#"><span class="fa fa-whatsapp"></span><span class="site1"> 53828268 </span></a></li>
                        <li><a href="#"><span class="fa fa-youtube"></span><span class="site1"> Lebinyo </span></a></li>
                    
                    </ul>
                    
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
            </div>
        
        
        </div>
    
    </footer>
</html>
