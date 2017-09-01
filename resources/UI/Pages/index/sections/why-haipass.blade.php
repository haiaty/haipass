<div class="container text-center">

    <div class="heading-content">
        <h3>{{ __("Why should I use Haipass?") }}</h3>
    </div>

    <!-- Example row of columns -->
    <div class="row">

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-content">
                <i class="fa fa-book"></i>
                <h5>{{ __("To avoid the need of remembering your passwords or the need to write them down") }}</h5>
                <p>
                    {{ __("Haipass frees you from remember or write down the passwords generated. You just need to remember the name of the site and your secret phrase. So no more files with passwords around, no more passwords stored in browsers and no more passwords put on a database of a password manager.") }}
                </p>

            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-content">
                <i class="fa fa-key"></i>
                <h5>{{ __("Different strong passwords for each website") }}</h5>
                <p>{{ __("To have strong passwords that can not be guessed with the various types of attacks. Haipass passwords have a very high entropy and even with the most powerful computers it would take millions of years to find them.") }}</p>
            </div>
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-content">
                <i class="fa fa-paper-plane-o "></i>
                <h5>{{ __("To always have your passwords on any device or operating system") }}</h5>
                <p>{{ __("Whether you are with your PC, or with your cell phone, or your tablet, or whether you're at a friend's home on his PC, it's enough to come to haipass.com and get your passwords.") }}</p>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-content">
                <i class="fa fa-thumbs-o-up"></i>
                <h5>{{ __("Fast and easy") }}</h5>
                <p>{{ __("To have your passwords you do not have to sign up, neither log in nor pay. You do not have to do anything other than writing the site name and your secret phrase and clicking one button.") }}</p>
            </div>
        </div>


    </div>


    <div class="heading-content">
        <h3>{{ __("Is Haipass secure?") }}</h3>
        <ul class="tips-list">
            <li> <i class="fa fa-check-circle-o tips-list__fa"></i>
               {!! __("Use ssl for encrypted data transmission. In this way, no one will be able to intercept the transmission of your secret phrase, nor the generated passwords.") !!}

            </li>
            <li><i class="fa fa-check-circle-o tips-list__fa"></i>
                {{ __("The algorithm used to generate the passwords uses a hash function of your secret phrase with a secret key that only Haipass has. In this way it is impossible for a craker to bruteforce with dictionary (both online and offline) to find out your secret password.") }}
            </li>
            <li><i class="fa fa-check-circle-o tips-list__fa"></i>
                {!! __("None of your passwords generated with Haipass <b> are NEVER Saved anywhere </ b>. See Haipass as a pure function that has two inputs: the secret phrase and name of the site you want to access.Given those inputs it will always generate the same output. Also since you do not have to sign up and you do not have an account on Haipass you will not need to save your passwords.") !!}
            </li>
            <li><i class="fa fa-check-circle-o tips-list__fa"></i>
                {!! __("On Haipass passwords are generated given two inputs: your secret phrase and the name of the site that you want to access. Your username or the email  are not used. Although Haipass can know the generated passwords, there is NO way to find out who you are, neither your name, nor your username or your email. So Haipass will never have all the information that is needed to know for access into your account. And again Haipass will never know who you are.") !!}
            </li>

        </ul>
    </div>

    <a href="{{ route('craft_page') }}">
        <button class="btn btn-primary btn-lg">{{ __("Ok, let me try it!") }}</button>
    </a>

    </div>
</div> <!-- /container -->