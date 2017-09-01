<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <title>{{ __("Haipass - strong passwords never forgotten") }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="{{ __("Haipass is a FREE service to help you have strong, long, complicated passwords for your accounts without you having to remember them.") }}">
    <meta name="keywords" content="{{ __("meta-tags") }}">
    <link rel="icon" href="/images/padlock.png" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" href="/images/padlock.png">

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}" />

    <link rel="stylesheet" href="{{ asset('/font-awesome-4.7.0/css/font-awesome.min.css') }}" />

    <link rel="stylesheet" type="text/css" href={{ asset('/css/compiled/craft.css') }} />

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a id="haipass-brand" class="navbar-brand" href="/">Haipass</a>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div id="haipass">
<!--Home page style-->
<header id="home" class="main-section">

    <div class="container">

        <div class="row">
            @include('craft.sections.form')
        </div>

        <haipass-result-modal  v-if="showResultModal"></haipass-result-modal>

    </div>

</header>

<!-- Sections -->
<section id="features" class="sections lightbg">

    @include('craft.sections.tips')
</section>


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
<script src="{{ asset('/' . LaravelLocalization::getCurrentLocale() . '/js/lang.js') }}"></script>
<script src="{{ asset('js/compiled/craft.js') }}"></script>
</body>
</html>
