<?php
$route = isset($post) && $post->get('id') ? 'editArticle&id='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>
<form method="post" action="../public/index.php?route=<?= $route; ?>" class="center">

    <div class="titleAndChapter">
        <div>
            <label for="title">Titre</label><br>
            <input type="text" id="title" name="title" value="<?= isset($post) ? htmlspecialchars($post->get('title')): ''; ?>"><br>
            <?= isset($errors['title']) ? $errors['title'] : ''; ?>
        </div>

        <div>
            <label for="numberChapter">Numéro du chapitre</label><br>
            <input type="number" id="numberChapter" name="numberChapter" value="<?= isset($post) ? htmlspecialchars($post->get('numberChapter')): ''; ?>"><br>
            <?= isset($errors['numberChapter']) ? $errors['numberChapter'] : ''; ?>
        </div>

    </div>

    <label for="content">Contenu</label><br>
    <textarea id="content" name="content"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea><br>
    <?= isset($errors['content']) ? $errors['content'] : ''; ?>

    <input type="submit" value="<?= $submit; ?>" id="submit" name="submit" class="button-secondary button">
</form>