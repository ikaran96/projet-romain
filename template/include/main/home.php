<main id="article">

<?php foreach ( $articles as $article ) { ?>

    <div class="card-article">

        <a href="">
            <h2 class="title"><?=$article['nom_article']?></h2>
        </a>
        
        <!-- A FINIR -->

        <h3 class="subtitle"><?=substr($article['texte_article'], 0, 150)?>...</h3>

        <div class="img">
            <a href=""><img class="logo" src="https://fflose.com/wp-content/uploads/2017/10/Picto-Football.svg"
                    alt=""></a>
            <a href="index.php?controller=article&task=show&id=<?=$article['id_articlenum']?>"><img class="image"
                    src="<?=$article['image_article']?>"
                    alt="<?=$article['nom_article']?>"></a>
        </div>

        <div class="category">
            <a href="#">FOOTBALL</a>
            <a href="#">QUIZ SPORT</a>
        </div>

    </div>

<?php } ?>

</main>