<?php
$this->title = "Article";
?>
<?= $this->session->show('add_comment'); ?>
<article>
    <h2><?= htmlspecialchars($article->getTitle());?></h2>
    <p><?= $article->getContent();?></p>
    <p><?= htmlspecialchars($article->getAuthor());?></p>
    <p>Créé le : <?= htmlspecialchars($article->getDate());?></p>
</article>

<section id="comments">
<?php
    if ($this->session->get('pseudo')){
        echo '<h3>Ajouter un commentaire</h3>';
        include('forms/form_comment.php');
    }
?>

    <h3>Commentaires</h3>
<?php
    foreach ($comments as $comment)
    {
?>
        <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
        <p><?= htmlspecialchars($comment->getContent());?></p>
        <p>Posté le <?= htmlspecialchars($comment->getDate());?></p>
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
</section>

