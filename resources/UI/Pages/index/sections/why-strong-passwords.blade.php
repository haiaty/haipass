<div class="container text-center">

    <div class="heading-content">
        <h3>{{__('Why do I need strong passwords?')}}</h3>
        <h5>
            {{ __('Because finding your own simple password is really easy for crackers while finding a strong and complex one is really very difficult') }}
        </h5>
    </div>

    <!-- Example row of columns -->
    <div class="row">

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-content">
                <i class="fa fa-question"></i>
                <h5>{{ __('Guessing') }}</h5>
                <p>
                    {{ __("A cracker might try to guess your passwords using probable words like your birthday, where you were born, your son's name, etc...") }}
                </p>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-content">
                <i class="fa fa-unlock-alt"></i>
                <h5>{{ __('Brute force') }}</h5>
                <p>
                    {{ __('A cracker with a brute force attack merely tries combination over combinations until he finds your password. So if the password is short or simple it can be easily guessed.') }}</p>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-content">
                <i class="fa fa-book"></i>
                <h5>{{ __('Dictionary (online)') }}</h5>
                <p>{{ __('A cracker uses an automatic program that, using a file with words commonly used as a password, attempts to login to the site with every word in the file.') }}</p>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-content">
                <i class="fa fa-user-secret"></i>
                <h5>{{ __('Dictionary (offline)') }}</h5>
                <p>{{ __('If the cracker manages to get the database containing users passwords of a particular web site as a text file, he can use it to do unhindered attempts.') }}</p>
            </div>
        </div>



    </div>
</div> <!-- /container -->