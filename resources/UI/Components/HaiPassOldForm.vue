<template>
    <div>
        <div class="row">
            <form class="haipass-form" @submit.prevent="onSubmit">
                <div class="row pad15">
                    <div class="col-12 col-md-4">
                        <input type="text" name='web_app' class="form-control form-control-lg" placeholder="website or application"
                               v-model="webapp">
                    </div>
                    <div class="col-12 col-md-4">
                        <input type="password" name="pass_phrase" class="form-control form-control-lg" placeholder="passphrase"
                               v-model="passphrase">
                    </div>
                    <div class="col-12 col-md-4">
                        <button type="submit" id="show-my-pass-btn" class="btn btn-lg haipass-form__btn">Show my pass</button>
                    </div>
                </div>
            </form>
            <div v-if="password" class="row password-ctnr">
                <div class="col-12">
                    <p>Hey your password is: </p>
                </div>
                <div class="col-12">
                    <input type="text" class="form-control form-control-lg" name="password-result"
                           v-model="password">password-result
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                webapp: '',
                passphrase: '',
                password: '',
            }
        },
        methods: {
            onSubmit() {

                var SELF =  this;
                axios.post('/password', {
                    web_app: this.webapp,
                    pass_phrase: this.passphrase,
                    craft_strategy: 'old_haipass'
                }).then(function({data}){
                    SELF.$store.commit('PASSWORD_GENERATED', data);
                });
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


</style>