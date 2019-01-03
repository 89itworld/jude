<?php
$cakeDescription = 'Judefly';
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <meta charset="utf-8">
    <meta name="description" content="Responsive Landing Page for Presenting Your Mobile App Which is Designed Based on Twitter Bootstrap 3.2" />
    <meta name="keywords" content="appex, parallax, one page, responsive, app landing, html template, mobile application" />
    <meta name="author" content="Anwar Hussain, deviserweb">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--   FAV AND TOUCH ICONS   -->
    <link rel="icon" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">


    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

<!--    --><?php //echo $this->Html->css(['mystyle.css']); ?>

    <?php echo $this->Html->css(['styles','flaticon','preloader','hover-effect-animation','hover-effect-style','owl.carousel','owl.theme','owl.transitions']);?>

    <?php echo $this->Html->css(['jquery.fancybox-buttons.css?v=1.0.5','jquery.fancybox-thumbs.css?v=1.0.7','animate','hexagon','style','responsive','blue','awe-booking-font','magnific-popup','jquery-ui','settings','gofer-style','gofer-demo','jquery.fancybox.css?v=2.1.5'])?>

    <?= $this->Html->css(['travelo/bootstrap.min.css','travelo/font-awesome.css','travelo/responsive.css','travelo/style.css','travelo/updates.css','travelo/animate.min.css',]) ?>

    <?= $this->Html->css(['components/settings.css','components/style.css','components/jquery.bxslider.css','components/flexslider.css']) ?>

    <?= $this->Html->script(['jquery-1.11.2.min']); ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>

    <![endif]-->

</head>
<body>
<div id="page-wrapper">
    <?= $this->element('Front/header');?>
    <?= $this->fetch('content') ?>
    <?= $this->element('Front/travelo_footer');?>
</div>

</body>
</html>
