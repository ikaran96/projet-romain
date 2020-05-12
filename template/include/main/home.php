<main id="article">

<?php foreach ( $articles as $article ) { ?>

    <div class="card-article">

        <a href="index.php?controller=article&task=show&id=<?=$article['id_articlenum']?>">
            <h2 class="title"><?=$article['nom_article']?></h2>
        </a>
        
        <!-- A FINIR -->

        <h3 class="subtitle"><?=substr($article['texte_article'], 0, 150)?>...</h3>

        <div class="img">
            <a href="?controller=article&task=showCa&id=<?=$article['id_categorie']?>">
                <img class="logo" src="template/assests/logo/<?=$article['nom_categorie']?>.svg" alt="<?=$article['nom_categorie']?>">
            </a>
            <a href="index.php?controller=article&task=show&id=<?=$article['id_articlenum']?>"><img class="image"
                    src="<?=$article['image_article']?>"
                    alt="<?=$article['nom_article']?>"></a>
        </div>

        <div class="category">
            <a href="?controller=article&task=showCa&id=<?=$article['id_categorie']?>"><?=$article['nom_categorie']?></a>
        </div>

    </div>

<?php } ?>

</main>