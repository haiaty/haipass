<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <title>{{ __("Haipass - strong passwords never forgotten") }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="{{ __("Haipass is a FREE service to help you have strong, long, complicated passwords for your accounts without you having to remember them.") }}">
    <meta name="keywords" content="{{ __("meta-tags") }}">
    <link rel="icon" href="/images/padlock.png" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="/images/padlock.png">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/plugins.css" />
    <link rel="stylesheet" href="/css/lato-webfont.css" />
    <link rel="stylesheet" href="/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="/css/responsive.css" />

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="haipass-brand" class="navbar-brand" href="#">Haipass</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#{{ route_translated(LaravelLocalization::getCurrentLocale(), 'why_strong_passwords') }}">{{ __('Why strong passwords?') }}</a></li>
                <li><a href="#{{ route_translated(LaravelLocalization::getCurrentLocale(), 'why_haipass') }}">{{ __('Why should I use it?') }}</a></li>
                <li><a href="#{{ route_translated(LaravelLocalization::getCurrentLocale(), 'how_it_works') }}">{{ __('How it works?') }}</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<!--Home page style-->
<header id="home" class="home">

    <div class="container">

        <div class="row">
            @include('index.sections.overview')
        </div>

    </div>

</header>
<!-- Sections -->
<section id="{{ route_translated(LaravelLocalization::getCurrentLocale(), 'why_strong_passwords') }}" class="sections lightbg">
    @include('index.sections.why-strong-passwords')
</section>

<!-- Sections -->
<section id="{{ route_translated(LaravelLocalization::getCurrentLocale(), 'how_it_works') }}" class="video">
    <div class="overlay sections">
        <div class="container text-center">
            <!-- Example row of columns -->
            <div class="row">
                @include('index.sections.how-it-works')
            </div>
        </div> <!-- /container -->
    </div>
</section>

<!-- Sections -->
<section id="{{ route_translated(LaravelLocalization::getCurrentLocale(), 'why_haipass') }}" class="sections lightbg">

    @include('index.sections.why-haipass')
</section>

<div id="haipass-app">


    @include('shared.modal-terms-of-service')

    @include('shared.modal-privacy-policy')

    <!--Footer-->
    <footer id="footer" class="footer colorsbg">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="copyright text-left">
                        <p>Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co"> Bootstrap Themes </a>2016. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="">
                        <p>{{ __("Contact me") }}: varottohaiaty@gmail.com</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="copyright text-right">
                        <p><a style="cursor: pointer;" @click="showModalTermsOfService = true">{{ __("Terms of Service") }}</a> | <a style="cursor: pointer;" @click="showModalPrivacyPolicy = true">Privacy Policy</a></p>
                    </div>
                </div>

            </div>
        </div>
    </footer>
</div>

<script src="{{ asset('js/compiled/index.js') }}"></script>
</body>
</html>
