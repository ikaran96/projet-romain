<main>

    <a class="tag-word tag-art" href="">Autres</a>

    <article class="article">

        <h3 class="top-art-title title-art">Top 10 des réponses des sportifs français à la FFL</h3>

        <p class="date-from date-art">2 mois</p>

        <div class="top-card-img img-art" href="top-article.php">
            <img src="template/assests\img\best-of-humour-ffl-sportifs.png" alt="">
        </div>

        <p class="intro">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ipsam at consequatur tenetur
            accusamus tempore ut, similique necessitatibus, cupiditate minus nulla reprehenderit, veritatis
            eaque vitae quae error iure. Perferendis, illo.
        </p>

        <h4>Lorem ipsum dolor sit amet</h4>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione quisquam cum nostrum ea
            perspiciatis facilis nam hic id animi quis laudantium est distinctio inventore vel harum culpa,
            expedita eligendi nobis.Perspiciatis modi magnam quia. Temporibus, voluptates! Voluptate saepe
            voluptatem molestiae pariatur id cum, quisquam similique assumenda? Perferendis cupiditate
            consequuntur, dolores blanditiis ipsam omnis sapiente necessitatibus? Dolores necessitatibus dolorum
            sint id!
        </p>

        <div class="similar-content">
            <p>À lire également : <a href="">Lien bon sens français</a></p>
        </div>

    </article>


    <!-- invite de connection si pas de session -->
    <?php if (!isset($_SESSION['type'])) : ?>
        <div class="alert-comment">
            <p class=""><a href="index.php?action=connection">Connectez-vous</a> pour laisser
                un commentaire !</p>
        </div>
    <?php endif ?>
    <!-- >invite de connection si pas de session -->

    <!-- insertion de commentaire -->
    <div class="submit-comment">
        <h3>Écrire un commentaire</h3>
        <form action="index.php?controller=article&task=insertComment&id=1" method="POST">
            <textarea name="comment" rows="8"></textarea>
            <button class="comment-btn envoyer" type="submit">Envoyer</button>
        </form>
    </div>
    <!-- /insertion de commentaire -->

    <!-- comments -->
    <div id="comments">
        <div class="comments-total">
            <h2><?= $totalComments ?> Commentaires</h2>
        </div>

        <div class="comments">
            <!-- comment -->
            <?php foreach ($commentaires as $comment) : ?>
                <div class="user-comment">
                    <div class="user-portrait">
                        <!-- <img class="" src="" alt=""> -->

                    </div>
                    <div>
                        <div class="comment-header">
                            <h4>BDD Variable Nom Prenom User</h4>
                            <span class="time"><?= strftime('%d %b. %Y, %R', strtotime($comment['date_commentaire'])) ?></span>
                        </div>
                        <p><?= $comment['contenu_commentaire'] ?>
                        </p>
                        <!-- php if connected -->
                        <button class="comment-btn archive" type="submit">Modifier</button>
                        <button class="comment-btn delete" type="submit">Supprimer</button>
                        <!-- /php if connected -->
                    </div>
                </div>
            <?php endforeach ?>
            <!-- /comment -->
        </div>

    </div>
    <!-- /comments -->







    <div id="mini-cards">

        <h3 class="title-minicard">Les derniers articles</h3>

        <div class="minicard">

            <div class="minicard-img">

                <a href="http://">
                    <div class="icon"><i class="fas fa-futbol"></i></div>
                </a>
                <a class="top-card-img" href="top-article.php">
                    <img src="template/assests\img\voici-les-20-clubs-de-football-les-plus-riches-du-monde.jpg" alt="">
                </a>

            </div>

            <div class="top-card-text">

                <div class="minicard-tag">
                    <a class="tag-word" href="">Football</a>
                    <a class="tag-word" href="">Quizz</a>
                </div>

                <h3>
                    <a class="top-card-title" href="top-article">Top 10 des réponses des sportifs français à la
                        FFL</a>
                </h3>
                <p class="date-from">2 mois</p>

            </div>

        </div>

        <div class="minicard">

            <div class="minicard-img">

                <a href="http://">
                    <div class="icon"><i class="fas fa-futbol"></i></div>
                </a>
                <a class="top-card-img" href="top-article.php">
                    <img src="template/assests\img\voici-les-20-clubs-de-football-les-plus-riches-du-monde.jpg" alt="">
                </a>

            </div>

            <div class="top-card-text">

                <div class="minicard-tag">
                    <a class="tag-word" href="">Football</a>
                    <a class="tag-word" href="">Quizz</a>
                </div>

                <h3>
                    <a class="top-card-title" href="top-article">Top 10 des réponses des sportifs français à la
                        FFL</a>
                </h3>
                <p class="date-from">2 mois</p>

            </div>

        </div>

        <div class="minicard">

            <div class="minicard-img">

                <a href="http://">
                    <div class="icon"><i class="fas fa-futbol"></i></div>
                </a>
                <a class="top-card-img" href="top-article.php">
                    <img src="template/assests\img\voici-les-20-clubs-de-football-les-plus-riches-du-monde.jpg" alt="">
                </a>

            </div>

            <div class="top-card-text">

                <div class="minicard-tag">
                    <a class="tag-word" href="">Football</a>
                    <a class="tag-word" href="">Quizz</a>
                </div>

                <h3>
                    <a class="top-card-title" href="top-article">Top 10 des réponses des sportifs français à la
                        FFL</a>
                </h3>
                <p class="date-from">2 mois</p>

            </div>

        </div>

        <div class="minicard">

            <div class="minicard-img">

                <a href="http://">
                    <div class="icon"><i class="fas fa-futbol"></i></div>
                </a>
                <a class="top-card-img" href="top-article.php">
                    <img src="template/assests\img\voici-les-20-clubs-de-football-les-plus-riches-du-monde.jpg" alt="">
                </a>

            </div>

            <div class="top-card-text">

                <div class="minicard-tag">
                    <a class="tag-word" href="">Football</a>
                    <a class="tag-word" href="">Quizz</a>
                </div>

                <h3>
                    <a class="top-card-title" href="top-article">Top 10 des réponses des sportifs français à la
                        FFL</a>
                </h3>
                <p class="date-from">2 mois</p>

            </div>

        </div>

        <div class="minicard">

            <div class="minicard-img">

                <a href="http://">
                    <div class="icon"><i class="fas fa-futbol"></i></div>
                </a>
                <a class="top-card-img" href="top-article.php">
                    <img src="template/assests\img\voici-les-20-clubs-de-football-les-plus-riches-du-monde.jpg" alt="">
                </a>

            </div>

            <div class="top-card-text">

                <div class="minicard-tag">
                    <a class="tag-word" href="">Football</a>
                    <a class="tag-word" href="">Quizz</a>
                </div>

                <h3>
                    <a class="top-card-title" href="top-article">Top 10 des réponses des sportifs français à la
                        FFL</a>
                </h3>
                <p class="date-from">2 mois</p>

            </div>

        </div>

        <div class="minicard">

            <div class="minicard-img">

                <a href="http://">
                    <div class="icon"><i class="fas fa-futbol"></i></div>
                </a>
                <a class="top-card-img" href="top-article.php">
                    <img src="template/assests\img\voici-les-20-clubs-de-football-les-plus-riches-du-monde.jpg" alt="">
                </a>

            </div>

            <div class="top-card-text">

                <div class="minicard-tag">
                    <a class="tag-word" href="">Football</a>
                    <a class="tag-word" href="">Quizz</a>
                </div>

                <h3>
                    <a class="top-card-title" href="top-article">Top 10 des réponses des sportifs français à la
                        FFL</a>
                </h3>
                <p class="date-from">2 mois</p>

            </div>

        </div>

        <div class="minicard">

            <div class="minicard-img">

                <a href="http://">
                    <div class="icon"><i class="fas fa-futbol"></i></div>
                </a>
                <a class="top-card-img" href="top-article.php">
                    <img src="template/assests\img\voici-les-20-clubs-de-football-les-plus-riches-du-monde.jpg" alt="">
                </a>

            </div>

            <div class="top-card-text">

                <div class="minicard-tag">
                    <a class="tag-word" href="">Football</a>
                    <a class="tag-word" href="">Quizz</a>
                </div>

                <h3>
                    <a class="top-card-title" href="top-article">Top 10 des réponses des sportifs français à la
                        FFL</a>
                </h3>
                <p class="date-from">2 mois</p>

            </div>

        </div>

        <div class="minicard">

            <div class="minicard-img">

                <a href="http://">
                    <div class="icon"><i class="fas fa-futbol"></i></div>
                </a>
                <a class="top-card-img" href="top-article.php">
                    <img src="template/assests\img\voici-les-20-clubs-de-football-les-plus-riches-du-monde.jpg" alt="">
                </a>

            </div>

            <div class="top-card-text">

                <div class="minicard-tag">
                    <a class="tag-word" href="">Football</a>
                    <a class="tag-word" href="">Quizz</a>
                </div>

                <h3>
                    <a class="top-card-title" href="top-article">Top 10 des réponses des sportifs français à la
                        FFL</a>
                </h3>
                <p class="date-from">2 mois</p>

            </div>

        </div>

        <div class="minicard">

            <div class="minicard-img">

                <a href="http://">
                    <div class="icon"><i class="fas fa-futbol"></i></div>
                </a>
                <a class="top-card-img" href="top-article.php">
                    <img src="template/assests\img\voici-les-20-clubs-de-football-les-plus-riches-du-monde.jpg" alt="">
                </a>

            </div>

            <div class="top-card-text">

                <div class="minicard-tag">
                    <a class="tag-word" href="">Football</a>
                    <a class="tag-word" href="">Quizz</a>
                </div>

                <h3>
                    <a class="top-card-title" href="top-article">Top 10 des réponses des sportifs français à la
                        FFL</a>
                </h3>
                <p class="date-from">2 mois</p>

            </div>

        </div>

    </div>




</main>