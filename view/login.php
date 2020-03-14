<?php
$this->title = "Connexion";
?>
<?= $this->session->show('error_login'); ?>
<?= $this->session->show('need_login'); ?>

<div>
    <form method="post" action="../public/index.php?route=login">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')) : ''; ?>"><br>
        
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        
        <label for="automatique">Connexion automatique</label>
        <input type="checkbox" name="auto"><br>
        
        <input type="submit" value="Connexion" id="submit" name="submit">
    </form>
</div>

