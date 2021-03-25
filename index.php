<?php
   require '../villagegreen/header.php';
?>
<div class="row" id="moove">
    <div class="col-12">
        <div class="button"><a href="page2.php">Cliquer pour en savoir plus</a></div>
        <img src="public/images/pubguitare.png" class="img-fluid" alt="Responsive image" id="guitarepub">
        <a href="#"><img src="public/images/bannieredroiteprix.png" class="img-fluid" alt="Responsive image" id="prix"></a>
    </div>
    
</div>
            
    <div class="photocentre">
        <img src="public/images/pictos.png" class="img-fluid"  width="100%" style="margin-top: 40px;" Responsive image" id="picto">
    </div>

            <div class="cat">
                <h1>Nos Categories</h1>
            </div>
        
     
        <div class="row">
            <div class="lienscat">
                <a href="guitare.php"><img src="public/images/guitare.png" class="img-fluid" alt="Responsive image"></a>
                <a href="batteries.php"><img src="public/images/batterie.png"  class="img-fluid" alt="Responsive image"></a>
                <a href="clavier.php"><img src="public/images/piano.png" class="img-fluid" alt="Responsive image"></a>
                <a href="studio.php"><img src="public/images/micro.png"  class="img-fluid" alt="Responsive image"></a>
            </div>
        </div>

        <div class="row">
            <div class="lienscat2">
                <a href="guitare.php"><img src="public/images/sono.png"  class="img-fluid" alt="Responsive image"></a>
                <a href="batteries.php"><img src="public/images/cases.png"  class="img-fluid" alt="Responsive image"></a>
                <a href="clavier.php"><img src="public/images/cable.png"  class="img-fluid" alt="Responsive image"></a>
                <a href="studio.php"><img src="public/images/saxo.png"  class="img-fluid" alt="Responsive image"></a> 
            </div>
        </div>

        <div class="row">

            <div class="col" id="ventehome">
                <h1>Nos meilleures ventes</h1>
                <br>
                <a href="guitare.php"><img src="public/images/venteguitare.png" class="img-fluid" alt="Responsive image" id="ventesguitare"></a>
                <a href="batteries.php"><img src="public/images/ventesaxo.png"  class="img-fluid" alt="Responsive image"></a>
                <a href="clavier.php"><img src="public/images/ventepiano.png"   class="img-fluid" alt="Responsive image"></a>
            </div>

            <div class="col" id="nospart">
                <h1>Nos partenaires</h1>
                <br>
                <a href="guitare.php"><img src="public/images/photopart.png" class="img-fluid" alt="Responsive image" id="imgpart"></a>
            </div>
        </div>
    </div><!--Fin du 1er container-->

    
<?php
include('footer.php');
?>