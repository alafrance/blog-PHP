<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <script src="https://kit.fontawesome.com/ddc2bafeff.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/i1vac04eruqfh6j3cqqaplbmyvmx3i9243xiqsbadqnssub6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script defer src='../public/js/tiny.js'></script>
    <script defer src='../public/js/fr_FR.js'></script>
</head>
<body>
    <?php include '../view/header.php'?>
    <?= $content ?>
</body>
</html>

