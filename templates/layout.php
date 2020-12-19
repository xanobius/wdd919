<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bulma.css">
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    <title><?php print $pageTitle ?? 'Startseite' ?></title>
</head>
<body>
<?php include('templates/navigation.php') ?>
<section class="section">
    <div class="container">
        <?php print $content ?? "Kein Inhalt definiert :-(" ?>
    </div>
</section>
</body>
</html>