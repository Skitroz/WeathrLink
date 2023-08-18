<?php include('./app/src/accueil/config.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="public/javascript/subMenu.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="public/css//index.css">
    <title><?php echo $titlePage; ?></title>
</head>
<body>
<?php include ('./app/src/accueil/header.php'); ?>
<?php include ('./app/src/accueil/main.php'); ?>
<script src="public/javascript/main.js"></script>
</body>
</html>