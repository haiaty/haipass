<!--Model for the terms of service-->
<modal-privacy-policy v-if="showModalPrivacyPolicy" @close="showModalPrivacyPolicy = false">

    <div class="modal-body">
        <p>{{ __("Haipass.com does not save anywhere the passwords that are generated") }}</p>


        <p>
            {{ __("The information that is collected is information about the Http requests and the number of passwords that are generated for statistics purposes.") }}
        </p>
    </div>

    <p slot="footer-text">{{ __("Ok, i understood") }}</p>

</modal-privacy-policy>
