<?php 
include('header.php');
?>


<?php


?>
<form action="produitajouter.php" method="post">

<div class="form-group">
                <label for="name">Photo </label>
                <input type="file"  name="pro_photo" id="photo"  required >     
</div>

<div class="form-group">
                <label for="name">Libellé </label>
                <input type="text"  name="pro_libellé" id="libeL"  required >     
</div>

<div class="form-group">
                <label for="name">Prix HT </label>
                <input type="text"  name="pro_prix_ht" id="prixht"  required >     
</div>

<div class="form-group">
                <label for="name">Description </label>
                <input type="text"  name="pro_description" id="description"  required >     
</div>

<div class="form-group">
                <label for="name">Stock </label>
                <input type="text"  name="pro_stock" id="stock"  required >     
</div>


<div class="form-group">
                
                <input type="submit"  value="Valider">     
</div>


</form>