<?php
    require_once('models/CategorieM.php');
    $CategorieM = new CategorieM;
    $categories = $CategorieM->findAll();
?>

<nav id="nav">

    <div>

    </div>

    <div id="header">

        <div class="shopping">
            <a href="?controller=user&task=showConnexion"><i class="fas fa-user-astronaut"></i></a>
        </div>

        <div class="center">
            <a href="index.php"><img src="template/assests/logo/logo1.png" alt=""></a>
        </div>

        <div class="menu">
            <ul>
                <li class="red">
                    <a href=""><i class="fas fa-shopping-basket"></i><span>Boutique FFL</span></a>
                </li>

                <li>
                    <a href="?controller=article&task=showCa&id=2"> <i class="fas fa-trophy"></i><span>Tops lose</span></a>
                </li>

                <li>
                    <a href=""><i class="fas fa-question-circle"></i><span>Quiz Sport</span></a>
                </li>
            </ul>
        </div>

        <div class="burger" onclick="openNav()">
            <a><i class="fas fa-bars"></i></a>
        </div>

    </div>


    <!-- Overlay content -->
    <!-- The overlay -->
    <div id="myNav" class="overlay">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <div class="overlay-content">

            <?php foreach($categories as $caterogie) { ?>

                <a href="?controller=article&task=showCa&id=<?=$caterogie['id_categorie']?>">
                    <?=$caterogie['nom_categorie']?>
                </a>

            <?php } ?>

        </div>
    </div>


    <div id="navbar">
        <ul>
            <?php foreach($categories as $caterogie) { ?>

            <li>
                <a href="?controller=article&task=showCa&id=<?=$caterogie['id_categorie']?>">
                    <img src="template/assests/logo/<?=$caterogie['nom_categorie']?>.svg" alt="<?=$caterogie['nom_categorie']?>">
                    <span><?=$caterogie['nom_categorie']?></span>
                </a>
            </li>

            <?php } ?>

        </ul>

    </div>

</nav>