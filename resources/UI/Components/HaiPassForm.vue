<template>
    <div>
        <div class="row">
            <form class="haipass-form" @submit.prevent="onSubmit">
                <div class="row pad15">
                <div class="col-12 col-md-4">
                    <input type="text" name='web_app' class="haipass-form__input form-control form-control-lg" v-bind:placeholder="i18n['Website or application name']"
                           v-model="webapp">
                </div>
                <div class="col-12 col-md-4">
                    <div class="input-group">
                        <input id="passphrase" type="password"
                               name="pass_phrase"
                               class="haipass-form__input form-control form-control-lg"
                               v-bind:placeholder="i18n['Secret passphrase']"
                               v-model="passphrase">
                        <span v-on:click="togglePassword" class="input-group-addon passphrase-state-icons">
                            <span v-if="isHidden">{{ i18n.show }}  <i class="fa fa-key" aria-hidden="true"></i></span>
                            <span v-if="isRevealed">{{ i18n.Hide }}  <i v-if="isRevealed" class="fa fa-key" aria-hidden="true"></i></span>
                        </span>

                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <button type="submit" id="show-my-pass-btn" class="btn btn-lg btn-primary haipass-form__btn">{{ i18n["My Password"] }}</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    require('hideshowpassword');

    export default {
        data() {
            return {
                webapp: '',
                passphrase: '',
                password: '',
                isRevealed: false,
                isHidden: true,
            }
        },
        methods: {
            onSubmit() {

                var SELF =  this;
                axios.post('/password', {
                    web_app: this.webapp,
                    pass_phrase: this.passphrase
                }).then(function({data}){
                    SELF.$store.commit('PASSWORD_GENERATED', data);
                });
            },
            togglePassword(){
                this.isRevealed = !this.isRevealed;
                this.isHidden = !this.isHidden;
                $('#passphrase').togglePassword();
            }
        }
    }
</script>
<style lang="sass">


    .haipass-form {
        width: 100%;
    }

    .haipass-form__btn {
        width: 100%;
    }

    .password-ctnr {
        padding: 15px;
    }

    .haipass-form__input {
        height: 57px;
    }

        .passphrase-state-icons {

            cursor: pointer;
            }


</style>