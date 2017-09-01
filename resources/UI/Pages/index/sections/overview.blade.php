<div class="col-md-6 hidden-xs">
    <img id="img-header" src="/images/padlock.png"/>
</div>
<div class="col-md-6 col-sm-12 col-xs-12">
    <div class="home-content sections">

        <h1><b>{{ __('Strong passwords never forgotten') }}.</b></h1>
        <p> {{ __('Do you want to have different passwords for each website, that are strong and complex, without having to remember them all and without having to write them down or saving them somewhere?') }}</p>
        <p>{!! __('Haipass is a free service to help you have strong, long, complicated passwords for your accounts without the need to remember them. The only thing that you have to remember is just a secret word or phrase.') !!}</p>
        <a  href="#{{ route_translated(LaravelLocalization::getCurrentLocale(), 'how_it_works') }}">
            <button class="btn btn-default btn-lg">{{ __('How it works?') }}</button>
        </a>
        <a href="{{ \LaravelLocalization::getURLFromRouteNameTranslated(\LaravelLocalization::getCurrentLocale(), 'routes.generate_password') }}">
            <button class="btn btn-primary btn-lg">{{ __('I want to try it') }}</button>
        </a>

    </div>
</div>