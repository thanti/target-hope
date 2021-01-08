
<!-- Table Generator-->
<!-- List Generator-->
<!-- Random Text Generator--><!DOCTYPE html>
<html lang="de">
    <head>
        <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="<?= $site->description() ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <?= css(['assets/css/styles.css', '@auto']) ?>
        <link rel="shortcut icon" href="<?= $site->image('favicon.ico')->url() ?>">
        <link rel="apple-touch-icon" href="<?= $site->image('apple-touch-icon.png')->url() ?>">
        <link rel="apple-touch-icon-precomposed" href="<?= $site->image('apple-touch-icon.png')->url() ?>">
        <link rel="icon" sizes="192x192" href="<?= $site->image('android-touch-icon.png')->url() ?>">
        <!-- script(src=js + "jquery.min.js?v=" + version)-->
        <!-- script(src=js + "workfiles.js?v=" + version)-->
        <!-- script(src=js/slick.min.js)--><!--[if lte IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><script>window.html5 || document.write("<script src="js/vendor/html5shiv.js"><\/script>")</script><![endif]-->
        <!--[if lte IE 9]><div class="browsehappy"><h2 class="beta">Achtung</h2><p>Sie benutzen einen <strong>veralteten</strong> Browser. Bitte <a href="http://browsehappy.com/">updaten Sie Ihren Browser</a> um die volle Funktionalität dieser Website erleben zu können.</p></div><![endif]-->
    </head>
    <body>