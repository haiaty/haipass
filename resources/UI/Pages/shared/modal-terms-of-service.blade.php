<!--Model for the terms of service-->
<modal-terms-of-service v-if="showModalTermsOfService" @close="showModalTermsOfService = false">

    <p slot="header-text">{{ __("Terms of Service") }}</p>

    <div class="modal-body">
        <p>{{ __("Haipass service is offered by Haiaty Varotto Silva Fonseca.") }}</p>


        <div>
            <p>{{ __("The user who wants to use Haipass must know that:") }}</p>
            <ul>
                <li><i class="fa fa-arrow-right" aria-hidden="true"></i>  {{ __("Haipass does not keep any of the generated passwords saved in any database.") }}</li>
                <li><i class="fa fa-arrow-right" aria-hidden="true"></i>  {{ __("Haipass can not come up in any way to the user's identity.") }}</li>
                <li><i class="fa fa-arrow-right" aria-hidden="true"></i>  {{ __("Haipass does not keep any secret phrase in any database, and being unable to know the identity of the user it is not possible in any way to get the secret phrase back.") }}</li>
                <li><i class="fa fa-arrow-right" aria-hidden="true"></i>
                    {{ __("You must keep your secret passprhase with care, because if you lose it you will need to reset your passwords using another secret phrase. If it is discovered or stolen, you must immediately change it, and then change your passwords on all platforms where you have used password haipass.") }}
                </li>
                <li><i class="fa fa-arrow-right" aria-hidden="true"></i>
                    {{ __("If the site has some malfunctioning or disservice you will not be able to have your passwords during the time the site is down. If this happens, i advice the user to change temporaly the password of the account that you need to access.")  }}

                </li>
            </ul>
        </div>

        <p>
            {{ __("The user also has the following prohibitions:") }}
        </p>

        <ul>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i>  {{ __("Copy the content of the site and its idea.") }}</li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i>  {{ __("Try to hack the site in any way without a written consent.") }}</li>
        </ul>

        <p> Disclaimer:</p>

        <ul>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i>{{ __("The Haipass owner is not liable in any way for any damages or problems related to the use of Haipass. It is also not liable if the secret phrase is discovered in any way due to a lack of the user.") }}</li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i>
                {{ __("The Haipass owner is not responsible for any damages or problems caused by any malfunction of the service or site. You must be aware that due to any malfunction of the site you will not be able to have your passwords during the malfunction period.") }}
            </li>
        </ul>
    </div>

    <p slot="footer-text">{{ __("Ok, i understood") }}</p>

</modal-terms-of-service>