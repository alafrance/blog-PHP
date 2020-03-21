<?php
$this->title = "Accueil";
$this->css = "home";
?>
<section id="slideshow">
<?= $this->session->showAlert('flag_comment', 'success'); ?>
<?= $this->session->showAlert('delete_comment', 'success'); ?>
<?= $this->session->showAlert('register', 'success'); ?>
<?= $this->session->showAlert('login', 'success'); ?>
<?= $this->session->showAlert('logout', 'success'); ?>
<?= $this->session->showAlert('delete_account', 'success'); ?>
    <div class="title">
        <h1 class="titleh1">Bienvenue sur le blog de <span>Jean Forteroche</span></h1>
        <p>Vous pourrez y lire son roman "billet simple pour l'Alaska"</p>
        <a  class="button button-secondary" href="../public/index.php?route=novel" id="linkNovel">Accéder au roman</a>
    </div>
    <div class="container-slider">
        <div id="slider">
            <div class="img-slide">
                <img src="img/slider/snow.jpg">
            </div>
            <div class="img-slide">
                <img src="img/slider/winterIsComing.jpg">
            </div>
            <div class="img-slide">
                <img src="img/slider/alaska-baleines.jpg">
            </div>

        </div>
    </div>
</section>

<section id="biography">
    <h1 class="uppercase underline">biographie</h1>
    <img src="img/portrait.jpg">
    <div class="pinched">
        <p>
            Jean Forteroche est né le 13 juillet 1985.
            Il est écrivan et a écrit de nombreux livres.
            Mais son livre "Billet simple pour l'Alaska" est le livre qu'il a mis le plus de temps à écrire. Plus de deux ans.
            Car il est allé en Alaska pour écrire son livre. Il voulait les meilleurs conditions possibles.
            Et un jour, Jean Forteroche a décidé de publier son roman en ligne. Et vous voici sur son blog.
            Mais pas de panique ! Vous pourrez le lire en format papier dès sa sortie (28 juin 2020).
        </p>
    </div>

</section>
<section id="novel">
    <h1 class="center underline marginH1 uppercase">Billet simple pour l'Alaska :</h1>
    <article id="icon">
        <div class="center justify">
            <i class="fas fa-book"></i>
            <h2 class="uppercase">gratuit</h2>
            <p>
                Vous pourrez lire TOUT mon livre gratuitement sur ce blog.<br>
                J'ai une page dédié à chaque chapitre.<br>
                En plus vous pourrez commentez chaque chapitre !
            </p>
        </div>

        <div class="center justify">
            <i class="fas fa-heart center"></i>
            <h2 class="uppercase">amour</h2>
            <p>
                Ce roman raconte l'histoire de deux amoureux. Vous allez être bouleversés en connaissant leur histoire.<br>
                Chaque moment en leur compagnie est drôle, et entrainant.<br>
            </p>
        </div>

        <div class="center justify">
            <i class="fas fa-plane center"></i>
            <h2 class="uppercase">voyage</h2>
            <p>
                Vous allez voyager avec eux !<br>
                Chaque moment passé à lire est un voyage<br>
                Vous apprendrez plein de choses sur l'Alaska<br>
            </p>
        </div>
    </article>
    <div class="livrePochette">
        <img src="img/livre.jpg" class="center">
    </div>
    <div class="allChapter">
<?php
        $i = 1;
        while ($i != 4){
?>
        <article class="chapter">
            <h2 class="capitalize underline center"><?= $articles[$i]->getTitle();?></h2>
            <p  class="center justify"><?= strip_tags(substr($articles[$i]->getContent(), 0, 600));?>...<br/>
            <a class="button button-secondary" href="../public/index.php?route=article&id=<?= $articles[$i]->getId()?>">Lire la suite</a>
        </article>
<?php
        $i++;
        }
?>
    </div>
    <a class="buttonAllChapter button button-primary center" href="../public/index.php?route=novel">Voir tous les chapitres</a>
</section>
