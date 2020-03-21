<?php
$this->title = "Article";
$this->css = 'article';
?>

<section class=" single">
    <?= $this->session->showAlert('add_comment', 'success'); ?>
    <article>
        <h2 class="center"><?= htmlspecialchars($article->getTitle());?></h2>
        <p class="justify"><?= $article->getContent();?></p>
        <p class="author"><?= htmlspecialchars($article->getAuthor());?></p>
        <p class="date">Créé le : <?= htmlspecialchars($article->getDate());?></p>
    </article>
</section>

<section id="comments">
<?php
    if ($this->session->get('pseudo')){
        echo '<h3 class="underline">Ajouter un commentaire</h3>';
        include('forms/form_comment.php');
    }
?>

    <div class="allComment">
        <h3 class="underline">Commentaires</h3>
<?php
    foreach ($comments as $comment)
    {
?>
        <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
        <p><?= htmlspecialchars($comment->getContent());?></p>
        <p class="date">Posté le <?= htmlspecialchars($comment->getDate());?></p>
<?php
         if($comment->isFlag()) {
            echo '<p>Ce commentaire a déjà été signalé</p>';
        } else {
?>
            <p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
<?php
        }
   }
?>
    </div>

</section>

