<!DOCTYPE html>
<html>
<head>
    <meta charset="uft-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link href="icon.png" type="image/x-icon" rel=""shortcut icon>
    <script src="js/jquery.min.js" deger></script>
    <script src="js/reg.js" deger></script>
    <base href="web">
    
</head>
<body>
<header>
    <div class="title">Web-программирование </div>
    <div class="menu">
        <?php require_once("menu.php");?>

        <?php if($session->existData("user")): ?>
            <a href="<?=SITE_DIR?>user"><?=
            $session->getData("user")->getName()?></a>
            <a href="<?=SITE_DIR?>logout">Выйти</a>
        <?php else:?>
            <a href="<?=SITE_DIR?>login">Войти</a>
        <?php endif;?>
    </div>
</header>
<main>
  
