<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">

    <h2 class="example-title">
        {{ __('I want to use Haipass for the password of my Facebook acount. Let me know how to do it.') }}
    </h2>
  <div class="row steps-box">
      <p class="steps-box__number-left">1.</p>
      <p class="steps-box__text">
          {{ __('Come to') }} <a class="steps-box__craft-link" href="{{ \LaravelLocalization::getURLFromRouteNameTranslated(\LaravelLocalization::getCurrentLocale(), 'routes.generate_password') }}">{{ \LaravelLocalization::getURLFromRouteNameTranslated(\LaravelLocalization::getCurrentLocale(), 'routes.generate_password') }}</a>
          {{ __("and enter in the 'Website or application name' input (the first field) The word 'Facebook'. Then enter a secret phrase, that only you know,  in the 'secret phrase' field (the second field). This is your secret key that will be used to generate all your passwords. Do not forget it, and you don't lose it, otherwise you will need to reset your passwords for all of your accounts that you have used Haipass.") }}
      </p>
  </div>
    <div class="row steps-box">
        <p class="steps-box__number-right">2.</p>
        <p class="steps-box__text">
            {{ __("Click the 'My Password' button and copy the password that Haipass will generate (you can copy it by clicking on the icon on the screen that will appear to you).") }}
        </p>
    </div>
    <div class="row steps-box">
        <p class="steps-box__number-left">3.</p>
        <p class="steps-box__text">
            {{ __("Use the copied password for your facebook account (Your facebook password can be set both in the registration step or through the settings panel).") }}
        </p>
    </div>
    <div class="row last-steps-box">
        <p class="steps-box__number-right">4.</p>
        <p class="steps-box__text">
            {{ __('Every time you need to log in on Facebook, come back to') }} <a class="steps-box__craft-link" href="{{ \LaravelLocalization::getURLFromRouteNameTranslated(\LaravelLocalization::getCurrentLocale(), 'routes.generate_password') }}">{{ \LaravelLocalization::getURLFromRouteNameTranslated(\LaravelLocalization::getCurrentLocale(), 'routes.generate_password') }}</a>,
            {{ __("put the word 'Facebook' in the first field, put your secret phrase that you have used for the first time in the second field and click the 'My Password' button. Copy your password and use it to log in.") }}
        </p>
    </div>
    <h3  class="example-title">{{ __("I understood, thanks!") }}</h3>
</div>