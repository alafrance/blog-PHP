<?php
$this->title  = 'Inscription';
?>
<h1>Mon blog</h1>
<p>En construction</p>
<div>
    <form method="post" action="../public/index.php?route=register">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>"><br>
        <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>
        
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password"><br>
        <?= isset($errors['password']) ? $errors['password'] : ''; ?>
        
        <label for="email">Email</label><br>
        <input type='email' id="email" name="email"><br>
        <?= isset($errors['email']) ? $errors['email'] . '<br>' : ""; ?>
        
        <input type="submit" value="Inscription" id="submit" name="submit">
    </form>
</div>

