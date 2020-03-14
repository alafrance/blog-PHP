<?php
$this->title = 'Administration';
?>
<?= $this->session->show('add_article');?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article');?>
<?= $this->session->show('unflag_comment');?>
<?= $this->session->show('delete_user'); ?>
<h2>Articles</h2>
<a href='../public/index.php?route=addArticle'>Ajouter un article</a>
<?php
foreach ($articles as $article)
{
?>
    <div>
        <h3>Chapitre <?= $article->getNumberChapter();?> :</h3>
        <p><?= htmlspecialchars($article->getTitle());?></p>
        <h3>Contenu : </h3>
        <p><?= substr($article->getContent(), 0, 100);?>...</p>
        <h3>Crée le :</h3>
        <p><?= htmlspecialchars($article->getDate());?></p>
        <h3>Actions : </h3>
        <a href='../public/index.php?route=article&id=<?= htmlspecialchars($article->getId());?>'>Accéder à l'article</a>
        <a href="../public/index.php?route=editArticle&id=<?= $article->getId(); ?>">Modifier</a>
        <a href="../public/index.php?route=deleteArticle&id=<?= $article->getId(); ?>">Supprimer</a>
    </div>
<?php
    }
?>

<h2>Commentaires signalés</h2>
<?php
foreach ($comments as $comment) {
?>
    <h3>Pseudo : </h3>
    <p><?= htmlspecialchars($comment->getPseudo());?></p>
    <h3>Commentaires : </h3>
    <p><?=  htmlspecialchars(substr($comment->getContent(), 0, 100));?></p>
    <h3>Crée le  : </h3>
    <p><?=  htmlspecialchars($comment->getDate());?></p>
    <h3>Actions</h3>
    <a href='../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>'>Désignaler ce commentaire</a><br>
    <a href='../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>'>Supprimer ce commentaire</a>

<?php
}
?>
<h2>Utilisateurs</h2>
<?php
foreach ($users as $user){
?>
    <h3>Pseudo : </h3>
    <p><?= htmlspecialchars($user->getPseudo());?></p>
    <h3>Date de création : </h3>
    <p><?= htmlspecialchars($user->getDateCreation());?></p>
    <h3>Rôle : </h3>
    <p><?= htmlspecialchars($user->getRole());?></p>
    <h3>Actions</h3>
<?php
    if ($user->getRole() != 'admin'){
?>
    <a href="../public/index.php?route=deleteUser&userId=<?= $user->getId();?>">Supprimer</a>
<?php
    }else{
        echo 'Suppression impossible';
    }
}
