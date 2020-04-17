<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/var.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/guillaume.css">

    <script src="https://kit.fontawesome.com/839df3b8b1.js"></script>

    <title>Le Bon Sens Français - Accueil</title>

</head>

<body>

    <?php include 'include/nav.php'; ?>
    
    <div id="page">

        <?php 
        
        if (empty($_GET['p'])) {
            include 'include/main/home.php'; 
        } elseif ($_GET['p'] == 'top') {
            include 'include/main/top.php'; 
        } elseif ($_GET['p'] == 'article') {
            include 'include/main/article.php'; 
        } else {
            include 'include/main/home.php';
        }
        
        ?>

        <aside id="aside">

            <div class="fb-page facebook" data-href="https://www.facebook.com/FFLose/" data-tabs="timeline" data-width="500px" data-height="500px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/FFLose/" class="fb-xfbml-parse-ignore"> 
                    <a href="https://www.facebook.com/FFLose/">FFL - Fédération Française de la Lose</a>
                </blockquote>
            </div>

            <div class="newsletter">

                <div class="img">
                    <img class="logo" src="https://i.ya-webdesign.com/images/black-envelope-png-icon-2.png" alt="">  
                </div>

                <span class="title">NEWSLETTER</span>
                <span class="subtitle">Recevez les dernières actualités</span>
                <span class="action">inscrivez-vous vite</span>

                <form action="">
                    <input type="text" name="" id="">
                    <button>JE M'INSCRIS</button>
                </form>

                <span class="nospan">Vous ne recevrez aucun SPAM</span>

            </div>


        </aside>

    </div>


    <?php include 'include/footer.php'; ?>
    
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v6.0"></script>

</body>

</html>