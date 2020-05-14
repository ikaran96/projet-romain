<main>

    <a class="tag-word tag-art" href="?controller=article&task=showCa&id=<?=$articleLast['id_categorie']?>">
        <?=$articleLast['nom_categorie']?>
    </a>

    <article class="article">

        <h3 class="top-art-title title-art"><?=$articleLast['nom_article']?></h3>

        <p class="date-from date-art"><?=$articleFirst['dateparution_article']?></p>

        <div class="top-card-img img-art" href="top-article.php">
            <img src="<?=$articleLast['image_article']?>" alt="<?=$articleLast['nom_article']?>">
        </div>

        <p class="intro">test</p>
            
        </p>

        <h4>Lorem ipsum dolor sit amet</h4>

        <p>
            <?=$articleLast['texte_article']?>
        </p>

        <div class="similar-content">
            <p>À lire également : <a href="">Lien bon sens français</a></p>
        </div>

    </article>






<div id="mini-cards">

    <h3 class="title-minicard">Les derniers articles</h3>


    <?php foreach ( $minis as $mini ) { ?>

        <div class="minicard">

            <div class="minicard-img">

                <a href="?controller=article&task=showCa&id=<?=$mini['id_categorie']?>">
                    <div class="icon">
                        <img class="logo" src="template/assests/logo/<?=$mini['nom_categorie']?>.svg" alt="<?=$mini['nom_categorie']?>">
                    </div>
                </a>
                <a class="top-card-img" href="index.php?controller=article&task=show&id=<?=$mini['id_articlenum']?>">
                    <img src="<?=$mini['image_article']?>" alt="<?=$mini['nom_article']?>">
                </a>

            </div>

            <div class="top-card-text">

                <div class="minicard-tag">
                    <a class="tag-word" href="?controller=article&task=showCa&id=<?=$mini['id_categorie']?>"><?=$mini['nom_categorie']?></a>
                </div>

                <h3>
                    <a class="top-card-title" href="index.php?controller=article&task=show&id=<?=$mini['id_articlenum']?>">
                        <?=$mini['nom_article']?>
                    </a>
                </h3>

                <p class="date-from"><?=$mini['dateparution_article']?></p>

            </div>

        </div>

    <?php } ?>


</main>