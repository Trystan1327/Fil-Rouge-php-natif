
<?php

  require "conexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
  $db = connexionBase(); // Appel de la fonction de connexion

// insert into 

    $requeteadd = $db ->prepare('INSERT INTO produit VALUES(NULL, :photo, :libellE,:prix_ht, :descrip, :stock, NULL');

    // lie chaque marqueur à une valeur
    $requeteadd->bindvalue(':photo', $_POST['pro_photo']);

    $requeteadd->bindvalue(':libel', $_POST['pro_libellé']);

    $requeteadd->bindvalue(':prix_ht', $_POST['pro_prix_ht']);

    $requeteadd->bindvalue(':descrip', $_POST['pro_description']);

    $requeteadd->bindvalue(':stock', $_POST['pro_stock']);

    //executé la requete preparé

    $insertIsOk = $requeteadd->execute();

    if($insertIsOk){
        $message = "Votre produit à été ajouté";
    }else{
        $message = "Echec, votre produit ne c'est pas ajouté";
    }
  
// fin de insert into

include('header.php');

echo $message ;

 include('footer.php');