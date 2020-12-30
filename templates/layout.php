<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS Files -->
    <?php foreach($css_head as $cssfile){ ?>
        <link rel="stylesheet" href="<?php print $cssfile; ?>">
    <?php }?>





    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    <title><?php print $pageTitle ?? 'Startseite' ?></title>
</head>
<body>
<?php include('templates/navigation.php') ?>
<section class="section">
    <div class="container">
        <?php
//            include('templates/character.php');
            if(isset($pageElement) && $pageElement != null){
                include($pageElement['page']);
            }else{
                // For historic reasons
                if(isset($page)){
                    include($page);
                }else{
                    if($content){
                        print $content;
                    }else{
                        include('templates/default.php');
                    }
                }
            }
        ?>
    </div>
</section>
<script src="assets/js/nav.js"></script>
</body>
</html>