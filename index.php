<?php 
    include_once 'includes/functions.php';
    include_once 'includes/config.php';
    include_once 'includes/scripts.php';
?>

<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=KoHo&family=Poor+Story&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="includes/foundation/css/foundation.min.css" />
    <link rel="stylesheet" href="includes/foundation/css/app.css" />
    <link rel="stylesheet" type="text/css" href="includes/style.css?<?=filemtime("includes/style.css")?>">
    <title>Stephan de Wit</title>
</head>
<body class="bg">
   <?php
    include_once 'includes/nav.php';
    include_once($menu[$_GET['page']]);
    include_once 'includes/footer.php';
   ?>
   
    <script src="includes/foundation/js/vendor/jquery.js"></script>
    <script src="includes/foundation/js/vendor/what-input.js"></script>
    <script src="includes/foundation/js/vendor/foundation.min.js"></script>
    <script src="includes/foundation/js/app.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>