<div class="bar container-contact-title ">
    <h2 class="h2-contact">Inscription</h2>
</div>


<main id="contact-faq">

    <div class="container-formulaire-contact">

        <form class="formulaire-contact" action="index.php?controller=user&task=inscriptionUser" method="POST">
      
         
            <p class="formulaire-middle">
                <label class="label-formulaire-contact" for="email">E-mail*</label> <br>
                <input name="mail_user" id="email" class="input-formulaire-contact" type="text"><br>
            </p>
            <p class="formulaire-middle">
                <label class="label-formulaire-contact" for="pseudo">Pseudo*</label> <br>
                <input id="pseudo" name="pseudo" class="input-formulaire-contact" type="text"> <br>
                <span class="small">*Le pseudo doit contenir max 14 caractères, symbole interdit sauf - et _</span>
            </p>
            <p class="formulaire-middle">
                <label class="label-formulaire-contact" for="pass">Mot de passe*</label> <br>
                <input id="pass" name="pass" class="input-formulaire-contact" type="password"><br>
                <span class="small">*Le mot de passe doit contenir une minuscule, une majuscule, un chiffre et minimum 6 caractères</span>
            </p>
            <p class="formulaire-middle">
                <label class="label-formulaire-contact" for="avatar">Avatar*</label> <br>
                <input id="avatar" name="avatar" class="input-formulaire-contact" type="file"><br>
            </p>
            <button class="button-formulaire-contact" type="submit" name="button-contact">S'INSCRIRE'</button>
        </form>

    </div>
</main> 