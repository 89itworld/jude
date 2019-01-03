<!DOCTYPE html>
<html lang="en">
<head>
    <title>judefly:admin</title>
    <meta charset="utf-8">
    <meta name="description" content="Responsive Landing Page for Presenting Your Mobile App Which is Designed Based on Twitter Bootstrap 3.2" />
    <meta name="keywords" content="appex, parallax, one page, responsive, app landing, html template, mobile application" />
    <meta name="author" content="Anwar Hussain, deviserweb">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--   FAV AND TOUCH ICONS   -->
    <link rel="icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- BOOTSTRAP CSS -->
    <?php echo $this->Html->css(['bootstrap.min']);?>

    <!--<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />-->
    <?php echo $this->Html->css(['responsive','gofer-style','admin-style.css']); ?>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->


<section class="awe-parallax admin-login">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="login-register-page__content">
            <div class="content-title">
                <span>Welcome back</span>
                <h2>Login Here!</h2>
            </div>
            <?php echo $this->Form->create(@$user); ?>
            <div class="form-item">
                <?php echo $this->Form->input('email',['type'=>'email','label'=>'Email','required'=>'required','placeholder'=>'someone@example.com']);?>
            </div>
            <div class="form-item">
                <?php echo $this->Form->input('password',['type'=>'password','label'=>'Password','required'=>'required','placeholder'=>'********']);?>
            </div>

            <div class="form-actions">
                <?php echo $this->Form->input('Login',['type'=>'submit']); ?>
            </div>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</section>

</body>
</html>



