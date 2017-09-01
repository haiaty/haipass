<template>
    <div>
        <div class="hrm-modal-mask">
            <div class="hrm-modal-wrapper">

                <div class="row">
                    <div id="hrm-modal-container" class="hrm-modal-container col-12 col-md-4">
                        <div class="hrm-modal-header">
                            <h2>{{ i18n["Here is your password"]}}</h2>
                        </div>

                        <div class="hrm-modal-body">
                            <div class="password-container">
                                <div class="input-group">
                                    <input type="password" class="password_input form-control form-control-lg"
                                           v-model="craftedPassword"/>
                                    <span class="input-group-btn">
                                        <button class="btn"><img class="clippy" src="/images/clippy.png" alt="Copy to clipboard"></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
    import Clipboard from 'clipboard'
    export default {

        computed: {
            craftedPassword(){
                return this.$store.getters.craftedPassword
            }
        },
        created: function (){

            var SELF = this;

            //We take the value copied fom the stored by using SELF inside the
            //closure of the text vlalue for clipboard
            this.clipboard = new Clipboard('.btn', {
                text: function(trigger) {
                    return SELF.$store.getters.craftedPassword
                }
            });

            this.clipboard.on('success', function(e) {

                //here we close the modal after the user copied the value of his password
                setTimeout(function(){
                    SELF.$store.commit('RESULT_MODAL_CLOSED');
                }, 100);

                e.clearSelection();
            });
        },
        destroyed: function(){

            //we need to destroy the clipboard in order to remove binding problems
            this.clipboard.destroy();

        }
    }
</script>
<style lang="sass">

    .hrm-modal-mask {
        position: fixed;
        z-index: 9998;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .5);
        display: table;
        transition: opacity .3s ease;
    }

    .hrm-modal-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hrm-modal-container {
        width: 100%;
        position: relative;
        top: 150px;
        margin: 0px auto;
        padding: 20px 30px;
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
        transition: all .3s ease;
        font-family: Helvetica, Arial, sans-serif;
    }

    .hrm-modal-header {
        padding: 15px 0px;
        border-bottom: 1px solid #3498db;
    }

    .hrm-modal-header h3 {
        margin-top: 0;
        color: #42b983;
    }

    .hrm-modal-body {
        margin: 20px 0;
    }

    .modal-default-button {
        float: right;
    }

    /*
     * The following styles are auto-applied to elements with
     * transition="modal" when their visibility is toggled
     * by Vue.js.
     *
     * You can easily play with the modal transition by editing
     * these styles.
     */

    .modal-enter {
        opacity: 0;
    }

    .modal-leave-active {
        opacity: 0;
    }

    .modal-enter .modal-container,
    .modal-leave-active .modal-container {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }

    .clippy {
        padding: 5px;
        max-width: 44px;
        max-height: 49px;
        border: 2px solid #8c8989;
        border-radius: 4px;
        cursor: pointer;
    }

    .password_input{
        height: 62px;
    }



</style>