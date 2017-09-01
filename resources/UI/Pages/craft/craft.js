
import store from '../../Stores/index'
import {mapGetters} from 'vuex'
import HaipassForm from '../../Components/HaiPassForm'
import HaipassOldForm from '../../Components/HaiPassOldForm'
import Ad from '../../Components/Ad'
import HaipassHeader from '../../Components/Header'
import HaipassResultModal from '../../Components/HaiPassResultModal.vue'
import ModalTermsOfService from '../../Components/ModalTermsOfService.vue'
import ModalPrivacyPolicy from '../../Components/ModalPrivacyPolicy.vue'
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../../bootstrap');

window.Vue = require('vue');

Vue.prototype.i18n = window.i18n;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#haipass',
    store,
    data: {
        showModalTermsOfService: false,
        showModalPrivacyPolicy: false,
    },
    computed: {
        // mix the getters into computed with object spread operator
        showResultModal(){
            return this.$store.getters.showResultModal
        }
    },
    components: {
        HaipassForm,
        Ad,
        HaipassHeader,
        HaipassResultModal,
        HaipassOldForm,
        ModalTermsOfService,
        ModalPrivacyPolicy
    }
});


require('./craft.scss')