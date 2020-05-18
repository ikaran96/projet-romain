<main id="article">

<?php foreach ( $articles as $article ) { ?>

    <div class="card-article">

        <a href="index.php?controller=article&task=show&id=<?=$article['articleLast']['id_articlenum']?>">
            <h2 class="title"><?=$article['articleLast']['nom_article']?></h2>
        </a>
        
        <!-- A FINIR -->

        <h3 class="subtitle"><?=substr($article['articleLast']['texte_article'], 0, 150)?>...</h3>

        <div class="img">
            <a href="?controller=article&task=showCa&id=<?=$article['articleLast']['id_categorie']?>">
                <img class="logo" src="template/assests/logo/<?=$article['articleLast']['nom_categorie']?>.svg" alt="<?=$article['articleLast']['nom_categorie']?>">
            </a>
            <a href="index.php?controller=article&task=show&id=<?=$article['articleLast']['id_articlenum']?>"><img class="image"
                    src="<?=$article['articleLast']['image_article']?>"
                    alt="<?=$article['articleLast']['nom_article']?>"></a>
        </div>

        <div class="category">
            <a href="?controller=article&task=showCa&id=<?=$article['articleLast']['id_categorie']?>"><?=$article['articleLast']['nom_categorie']?></a>
        </div>

    </div>

<?php } ?>

</main>