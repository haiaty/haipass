/**
 * Created by haiaty.varotto on 25/10/2016.
 */

import Vue from 'vue'
import Vuex from 'vuex'


Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        showResultModal: false,
        craftedPassword: ''
    },
    mutations: {
        ["PASSWORD_GENERATED"](state, craftedPassword){
            state.showResultModal = true;
            state.craftedPassword = craftedPassword;
        },
        ["RESULT_MODAL_CLOSED"](state){
            state.showResultModal = false;
        }
    },
    getters: {
        showResultModal: (state) => {
            return state.showResultModal;
        },
        craftedPassword:  (state) => {
            return state.craftedPassword;
        },

    }
})
