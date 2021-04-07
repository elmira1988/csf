<template>
    <form ref="form">
        <span v-html="token"></span>
        <div class="form-group">
            <label class="form-label form-label-outside rd-input-label">Плательщик (Ф.И.О. полностью)</label>

            <input type="text"
                   name="clientid"
                   class="form-control"
                   autocomplete="off"
                   placeholder="Иванов Иван Иванович"
                   value="иванов"
                   :class="{'is-invalid':(errors.clientid!=undefined)}">
            <div class="invalid-feedback">это обязательное поле</div>
        </div>

        <div class="form-group">
            <label class="form-label form-label-outside rd-input-label">Наименование услуги</label>
            <input type="text"
                   name="service_name"
                   class="form-control"
                   autocomplete="off"
                   value="Участие в конференции"
                   placeholder="Участие в конференции"
                   :class="{'is-invalid':(errors.service_name!=undefined)}">
            <div class="invalid-feedback">это обязательное поле</div>
        </div>

        <div class="form-group">
            <label class="form-label form-label-outside rd-input-label">Сумма платежа</label>
            <input type="text"
                   name="pay_amount"
                   autocomplete="off"
                   value="50"
                   class="form-control"
                   :class="{'is-invalid':(errors.pay_amount!=undefined)}">
            <div class="invalid-feedback">это обязательное поле</div>
        </div>

        <div class="form-group">
            <label class="form-label form-label-outside rd-input-label">Email</label>
            <input type="email"
                   name="client_email"
                   class="form-control"
                   placeholder="name@example.com"
                   autocomplete="off"
                   value="elmira.sharapova@yandex.ru"
                   :class="{'is-invalid':(errors.email!=undefined)}">
            <div class="invalid-feedback">это обязательное поле</div>
        </div>

        <div class="form-group">
            <label class="form-label form-label-outside rd-input-label">Телефон</label>
            <input type="text"
                   name="client_phone"
                   class="form-control"
                   placeholder="(999)999-9999"
                   autocomplete="off"
                   value="(999)999-9999"
                   v-mask="'(999)999-9999'"
                   :class="{'is-invalid':(errors.phone!=undefined)}">
            <div class="invalid-feedback">это обязательное поле</div>
        </div>

        <div class="offset-top-20 text-center text-md-right">
            <button type="button" class="btn button-primary" @click="send_form">Отправить</button>
        </div>
    </form>
</template>

<script>
    import PNotify from 'pnotify/dist/es/PNotify.js';
    PNotify.defaults.styling = 'bootstrap4'; // Bootstrap version 4

    export default {
        name: "PaymentComponent",
        data:function () {
            return{
                errors:{}
            }
        },
        props:{
            url:{
                type:String,
                default:''
            },
            token:{
                type:String,
                default:''
            }
        },
        methods:{

            send_form: function () {
                let formData = new FormData(this.$refs.form);

                axios.post( this.url,
                    formData,
                    {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    }
                ).then((response) =>{
                    console.log('SUCCESS!!');
                    console.log(response);

                    //Не прошла проверка форма с данными
                    if(response.data.errors){
                        this.errors = response.data.errors;

                        if (!$.isEmptyObject(this.errors)) {
                            PNotify.error({
                                title: 'Ошибка в данных',
                                text: "Пожалуйста, проверьте вводимые данные!",
                                hide: true,
                                animation: 'fade',
                                animateSpeed: '250ms',
                                delay: 4000,
                                remove: true,
                                width:700,
                                buttons: {closer: false,sticker: false}
                            });
                        }

                    }
                    else {
                        if(response.data.status=='error'){
                            PNotify.error({
                                title: 'Ошибка!',
                                text: "Ошибка при работе с базой данных!",
                                hide: true,
                                animation: 'fade',
                                animateSpeed: '250ms',
                                delay: 4000,
                                remove: true,
                                width:700,
                                buttons: {closer: false,sticker: false}
                            });
                        }
                        else {
                            //window.location = response.data.url;
                        }

                    }
                })
                    .catch((error) =>{
                        console.log('FAILURE!!');
                    });
            }
        }
    }
</script>

<style scoped>

</style>
