<main id="article">

<?php foreach ( $articles as $article ) { ?>

    <div class="card-article">

        <a href="">
            <h2 class="title"><?=$article['nom_article']?></h2>
        </a>
        
        <!-- A FINIR -->

        <h3 class="subtitle">Le Quiz Sport du jour : Retrouvez les plus gros artilleurs de notre bonne Ligue des Talents. Au menu du quiz sport quotidien, encore du...</h3>

        <div class="img">
            <a href="index.php?controller=article&task=show"><img class="logo" src="https://fflose.com/wp-content/uploads/2017/10/Picto-Football.svg"
                    alt=""></a>
            <a href="index.php?controller=article&task=show"><img class="image"
                    src="template/assests/img/17042020-Tireurs-en-L1.jpg"
                    alt=""></a>
        </div>

        <div class="category">
            <a href="#">FOOTBALL</a>
            <a href="#">QUIZ SPORT</a>
        </div>

    </div>

<?php } ?>

</main>