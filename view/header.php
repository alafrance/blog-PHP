<header style="display:flex;justify-content: space-between;">
    <a href="../public/index.php">Page d'accueil</a>
    <a href='../public/index.php?route=novel'>Billet simple pour l'Alaska</a>
    <a href='../public/index.php?route=biography'>Biographie Jean Forteroche</a>
<?php
    if ($this->session->get('pseudo')){
?>
        <a href='../public/index.php?route=profile'>Profil</a>
<?php
        if($this->session->get('role') === 'admin') {
?>
            <a href="../public/index.php?route=administration">Administration</a>
<?php
        }
    }else {
?>
    <a href='../public/index.php?route=login'>Connexion</a>
    <a href='../public/index.php?route=register'>Inscription</a>
<?php
    }
?>
</header>