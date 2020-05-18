<div class="bar">

    <h2><?=$articles[0]['articleLast']["nom_categorie"]?></h2>
    <div class="icon">
        <img class="logo" src="template/assests/logo/<?=$articles[0]['articleLast']['nom_categorie']?>.svg" 
            alt="<?=$articles[0]['articleLast']['nom_categorie']?>">
    </div>

</div>

<main>

<?php foreach ( $articles as $article ) { ?>

    <div class="top-card">

        <a class="top-card-img" href="index.php?controller=article&task=show&id=<?=$article['articleLast']['id_articlenum']?>">
            <img src="<?=$article['articleLast']['image_article']?>" alt="<?=$article['articleLast']['nom_article']?>">
        </a>

        <div class="top-card-text">

            <a class="tag-word" href="?controller=article&task=showCa&id=<?=$article['articleLast']['id_categorie']?>">
                <?=$article['articleLast']["nom_categorie"]?>
            </a>

            <h3>
                <a class="top-card-title" href="index.php?controller=article&task=show&id=<?=$article['articleLast']['id_articlenum']?>">
                    <?=$article['articleLast']['nom_article']?>
                </a>
            </h3>

            <p class="excerpt"><?=substr($article['articleLast']['texte_article'], 0, 200)?>...</p>
            <p class="date-from"><?=$article['articleFirst']['dateparution_article']?></p>

        </div>
    </div>

<?php } ?>

</main>