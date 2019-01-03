<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Judefly';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- TITLE OF SITE -->
<!--    <title>Judefly | Mobile App Coming Soon</title>-->
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <meta charset="utf-8">
    <meta name="description" content="<?php print_r($page['meta_description']);?>" />
    <meta name="keywords" content="<?php print_r($page['meta_keywords']);?>" />
    <meta name="author" content="Anwar Hussain, deviserweb">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!--   FAV AND TOUCH ICONS   -->
    <link rel="icon" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- CUSTOME STYLESHEET -->
    <?php echo $this->Html->css(['mystyle.css']); ?>
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700' rel='stylesheet' type='text/css'>

    <!-- BOOTSTRAP CSS -->
    <?php echo $this->Html->css(['bootstrap.min','font-awesome.min','styles','flaticon','preloader','hover-effect-animation','hover-effect-style','owl.carousel','owl.theme','owl.transitions']);?>

    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
    <?php echo $this->Html->css(['jquery.fancybox-buttons.css?v=1.0.5','jquery.fancybox-thumbs.css?v=1.0.7','animate','hexagon','style','responsive','blue','awe-booking-font','magnific-popup','jquery-ui','settings','gofer-style','gofer-demo']); ?>
    <link rel="stylesheet" type="text/css" href="css/jssocials.css">
    <link rel="stylesheet" type="text/css" href="css/jssocials-theme-flat.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>
<?= $this->element('Front/home_footer'); ?>

</body>
</html>
