<?php
$this->title = 'Billet simple pour l\'alaska';
?>
<?php
foreach ($articles as $article)
{
    ?>
    <article>
        <h2><?= htmlspecialchars($article->getTitle());?></h2>
        <div>
                <?= substr($article->getContent(), 0, 600);?>...<br>
                <a href="../public/index.php?route=article&id=<?= htmlspecialchars($article->getId());?>">Lire la suite</a>
        </div>
        <p>Ecrit par <?= htmlspecialchars($article->getAuthor());?></p>
        <p>Créé le : <?= htmlspecialchars($article->getDate());?></p>
    </article>
    <?php
}
?>