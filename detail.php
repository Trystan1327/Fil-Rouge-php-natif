
        <?php    
        require "conexion_bdd.php"; // Inclusion de notrebibliothèque de fonctions

        $db = connexionBase(); // Appel de la fonction deconnexion
        $pro_id = $_GET['pro_id'];
        $requete = "SELECT * FROM produit WHERE pro_id=".$pro_id;

        $result = $db->query($requete);

        // Renvoi de l'enregistrement sous forme d'un objet
        
       ?>
    
       <body> 
       <?php include('header.php'); 

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


echo"<tr>";
        

while ($row = $result->fetch(PDO::FETCH_OBJ))
{
        
echo "<td style='border:2px solid black;'><img src=".$row->pro_photo."></td>";
echo"<td style='border:2px solid black;text-align:center;'>".$row->pro_id."</td>";
echo"<td style='border:2px solid black;text-align:center;'>".$row->pro_libellé."</td>";
echo"<td style='border:2px solid black;text-align:center;'>".$row->pro_prix_ht."</td>";
echo"<td style='border:2px solid black;text-align:center;'>".$row->pro_description."</td>";
echo"<td style='border:2px solid black;text-align:center;'>".$row->pro_stock."</td>";
echo"<td style='border:2px solid black;text-align:center;'>".$row->cat_id."</td>";


echo"</tr>";  
}
echo "</table>";





 ?>
</div>
           <?php include('footer.php'); ?>
           
       </body>
    