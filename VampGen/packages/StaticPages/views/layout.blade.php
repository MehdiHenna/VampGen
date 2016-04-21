<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VampGen</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="/css/app.css">
    <!-- <script src="js/vendor/modernizr-2.8.3.min.js"></script> -->
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500italic,700italic,300' rel='stylesheet' type='text/css'>
</head>
<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
    <nav class="menu">
        <ul>
            <li><a href="">Inscription</a></li>
            <li><a href="">Connexion</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-2.1.4.min.js"><\/script>')</script>
    <!-- <script src="js/plugins.js"></script> -->
    <script src="/js/app.js"></script>
    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
        ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
    </script>

    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>