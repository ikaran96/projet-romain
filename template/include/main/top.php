<div class="bar">

    <h2><?=$articles[0]["nom_categorie"]?></h2>
    <div class="icon">
        <img class="logo" src="template/assests/logo/<?=$articles[0]['nom_categorie']?>.svg" alt="<?=$articles[0]['nom_categorie']?>">
    </div>

</div>

<main>

<?php foreach ( $articles as $article ) { ?>

    <div class="top-card">

        <a class="top-card-img" href="index.php?controller=article&task=show&id=<?=$article['id_articlenum']?>">
            <img src="<?=$article['image_article']?>" alt="<?=$article['nom_article']?>">
        </a>

        <div class="top-card-text">

            <a class="tag-word" href="?controller=article&task=showCa&id=<?=$article['id_categorie']?>">
                <?=$article["nom_categorie"]?>
            </a>

            <h3>
                <a class="top-card-title" href="index.php?controller=article&task=show&id=<?=$article['id_articlenum']?>">
                    <?=$article['nom_article']?>
                </a>
            </h3>

            <p class="excerpt"><?=substr($article['texte_article'], 0, 200)?>...</p>
            <p class="date-from"><?=$article['dateparution_article']?></p>

        </div>
    </div>

<?php } ?>

</main>