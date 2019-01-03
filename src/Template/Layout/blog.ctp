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
<head>
    <title><?= $cakeDescription ?>: <?= $this->fetch('title') ?></title>

    <meta charset="utf-8">
    <meta name="description"
          content="Responsive Landing Page for Presenting Your Mobile App Which is Designed Based on Twitter Bootstrap 3.2"/>
    <meta name="keywords"
          content="appex, parallax, one page, responsive, app landing, html template, mobile application"/>
    <meta name="author" content="Anwar Hussain, deviserweb">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--   FAV AND TOUCH ICONS   -->
    <link rel="icon" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- GOOGLE FONT -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

    <!-- CUSTOME STYLESHEET -->
    <?php echo $this->Html->css(['mystyle.css']); ?>

    <!-- BOOTSTRAP CSS -->
    <?php echo $this->Html->css(['bootstrap.min', 'font-awesome.min', 'owl.carousel', 'blue', 'style', 'awe-booking-font', 'magnific-popup', 'jquery-ui', 'settings', 'gofer-style', 'gofer-demo']); ?>
    <?php echo $this->Html->script(['jquery-1.11.2.min','scripts','owl.carousel.min','masonry.pkgd.min','jquery.parallax-1.1.3','theia-sticky-sidebar','jquery.magnific-popup.min']); ?>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!--[if IE 7]>
<body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]>
<body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]>
<body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<body> <!--<![endif]-->

<?= $this->element('Front/header'); ?>
<?= $this->Flash->render(); ?>
<?= $this->fetch('content'); ?>
<?= $this->element('Front/footer'); ?>

</body>
</html>
