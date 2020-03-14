<?php
$this->title = "Accueil";
 ?>

<?= $this->session->show('flag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>


<section>
    <img src="../public/img/portrait.jpg" alt="Portrait Jean Forteroche">
    <article>
            <h1>BIOGRAPHIE</h1>
            <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex libero eaque repudiandae dolorem ipsum vel, adipisci molestiae hic illo
            quaerat eius neque optio, eligendi iure aperiam nisi fugit. Error, provident.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae corrupti deleniti eum magnam saepe dolor consectetur ad! Suscipit
            facilis rerum laborum quos hic distinctio deleniti eum provident consequuntur in. Fugiat!
            </p>
    </article>
</section>

<hr>

<section>
    <h1>Mon roman : Billet simple pour l'Alaska</h1>
    <div>
             <img src="../public/img/livre.jpg" alt="livre billet simple pour l'Alaska">
             <article>
                    <h2>Résumé</h2>
                     <p>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptas necessitatibus voluptatibus quos ad nihil ullam incidunt, eaque consequatur voluptatem,
                     veritatis placeat sit deserunt. Laboriosam corporis itaque inventore aut laborum.
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus commodi porro numquam perferendis mollitia a officiis. Nihil dicta ad vitae quaerat quod
                     molestias possimus, corrupti, quam repudiandae consequuntur, fugit quo.
                     </p>
             </article>
    </div>
</section>

<section>
    <div>
            <i class="fas fa-book"></i>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi voluptatum voluptates nesciunt soluta
            dolores totam quae asperiores consequatur distinctio provident adipisci, explicabo laudantium? Molestiae
            aperiam ipsum dolore repellendus odio ab.
            </p>
    </div>

    <div>
            <i class="fas fa-heart"></i>		
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi voluptatum voluptates nesciunt soluta
            dolores totam quae asperiores consequatur distinctio provident adipisci, explicabo laudantium? Molestiae
            aperiam ipsum dolore repellendus odio ab.
            </p>
    </div>

    <div>
            <i class="fas fa-plane"></i>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi voluptatum voluptates nesciunt soluta
            dolores totam quae asperiores consequatur distinctio provident adipisci, explicabo laudantium? Molestiae
            aperiam ipsum dolore repellendus odio ab.
            </p>
    </div>
</section>

<section>
    <h1>MES CHAPITRES</h1>
    <div>
        <!-- Faire apparaitre apercu  articles -->
            <a href="index.php?route=article">Lire tous les CHAPITRES </a>
    </div>
</section>

