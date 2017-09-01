
import ModalTermsOfService from '../../Components/ModalTermsOfService.vue'
import ModalPrivacyPolicy from '../../Components/ModalPrivacyPolicy.vue'

window.Vue = require('vue');


const app = new Vue({
    el: '#haipass-app',
    data: {
        showModalTermsOfService: false,
        showModalPrivacyPolicy: false,
    },
    methods: {
        test() {
            console.log('working');
        },
    },
    components: {
        ModalTermsOfService,
        ModalPrivacyPolicy
    }
});

