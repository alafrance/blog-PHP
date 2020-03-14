<?php
$this->title = 'Mon profil';
?>
<?= $this->session->show('update_password'); ?>
<section>
    <h2>Bienvenue <?= $this->session->get('pseudo'); ?></h2>
    <a href="../public/index.php?route=updatePassword">Modifier son mot de passe</a><br>
    <a  href='../public/index.php?route=logout'>Déconnexion</a><br>
    <a href="../public/index.php?route=deleteAccount">Supprimer son compte</a><br>

</section>