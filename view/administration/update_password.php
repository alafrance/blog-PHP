<?php
$this->title = 'Modifier mot mot de passe';
?>
<div>
    <p>Le mot de passe de <?= $this->session->get('pseudo'); ?> sera modifié</p>
    <?php include '../view/forms/form_password.php'?>
</div>