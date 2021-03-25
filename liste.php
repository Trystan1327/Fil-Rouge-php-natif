
 <!-- $q = "SET NAMES utf8";
// $result = $pdo->query($q);
// if(!$result) die ($pdo->error);
// $pro_id = $_GET['pro_id']; -->

    

    <?php
    require "conexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
    $db = connexionBase(); // Appel de la fonction de connexion
    $requete = 
    "SELECT *
    FROM produit";


    $result = $db->query($requete);

    if (!$result) 
    {
        $tableauErreurs = $db->errorInfo();
        echo $tableauErreur[2]; 
        die("Erreur dans la requête");
    }

    if ($result->rowCount() == 0) 
    {
       // Pas d'enregistrement
       die("La table est vide");
    }
    include('header.php');
    echo'<div class="liste">';
    echo "<table>";



        echo"<tr style='border:2px solid black; background-color: teal'>";
        
            echo"<td style='border:2px solid black; color: white'>PHOTO</td>";
            echo "<td style='border:2px solid black; color: white'>ID</td>";
            echo "<td style='border:2px solid black; color: white'>LIBELLE</td>";
            echo"<td style='border:2px solid black; color: white'>PRIX HT</td>";
            echo"<td style='border:2px solid black; color: white'>DESCRIPTION</td>";
            echo"<td style='border:2px solid black; color: white'>STOCK</td>";
            echo"<td style='border:2px solid black; color: white'>CATEGORIE ID</td>";

        echo"</tr>";
       
        while ($row = $result->fetch(PDO::FETCH_OBJ))
        {
        echo"<tr>";
        

         
        
        echo "<td style='border:2px solid black;'><img src=".$row->pro_photo."></td>";
        echo"<td style='border:2px solid black;text-align:center;'>".$row->pro_id."</td>";
    
        echo '<td style="border:2px solid black;text-align:center;"><a href="detail.php?pro_id='.$row->pro_id.'" title='.$row->pro_libellé.'>'.$row->pro_libellé.'</a></td>';
        echo"<td style='border:2px solid black;text-align:center;'>".$row->pro_prix_ht."</td>";
        echo"<td style='border:2px solid black;text-align:center;'>".$row->pro_description."</td>";
        echo"<td style='border:2px solid black;text-align:center;'>".$row->pro_stock."</td>";
        echo"<td style='border:2px solid black;text-align:center;'>".$row->cat_id."</td>";

        
        echo"</tr>";
    }

    echo "</table>"; 
    echo '<a href="ajout_form" class="btn btn-primary mt-3"> Ajouter un produit</a>';
    echo '</div>';
    ?>







    </div>
<?php include('footer.php');?>