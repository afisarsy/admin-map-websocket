<?= doctype('html5') ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title><?= $page_title?></title>

    <?= link_tag('plugins/bootstrap/bootstrap.min.css') ?>
    <?= link_tag('css/base.css') ?>
    
    <!-- Icons -->
    <?= link_tag('plugins/fontawesome/css/all.min.css') ?>

    <?= $this->renderSection("styles"); ?>
</head>
<body class="d-flex">
    <?= $this->renderSection("content"); ?>

    <?= script_tag('plugins/jquery/jquery-3.6.0.min.js') ?>
    <?= script_tag('plugins/popper/popper.min.js') ?>
    <?= script_tag('plugins/bootstrap/bootstrap.min.js') ?>
    <?= script_tag('js/base.js') ?>

    <?= $this->renderSection("scripts"); ?>
</body>
</html>