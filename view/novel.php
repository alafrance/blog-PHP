<?php
$this->title = 'Billet simple pour l\'alaska';
$this->css = "novel";
$i = 0;
?>
<section>
    <h1 class="center">Bienvenue sur la page dédié à "Billet simple pour l'Alaska"</h1>
    <p class="center">Vous pouvez lire n'importe quel chapitre et même commentez !</p>
    <div class="flexWrap">
<?php
    foreach ($articles as $article)
    {
        $i += 1;
        ?>
        <article class="chapter">
            <h2 class="center underline">Chapitre <?= $i ?> : <?= htmlspecialchars($article->getTitle());?></h2>
            <div class="center marginDiv">
                    <p class="center justify"><?= strip_tags(substr($article->getContent(), 0, 1000));?>...</p>
                    <a class="button button-secondary" href="../public/index.php?route=article&id=<?= htmlspecialchars($article->getId());?>">Lire la suite</a>
            </div>
            <p class="author center">Ecrit par <?= htmlspecialchars($article->getAuthor());?></p>
            <p class="date center">Créé le : <?= htmlspecialchars($article->getDate());?></p>
        </article>
        <?php
    }
?>
    </div>
</section>