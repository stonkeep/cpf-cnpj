import VueTheMask from 'vue-the-mask'

Nova.booting((Vue, router) => {
    //Usando pacote vue-the-mask para facilitar a vida
    Vue.use(VueTheMask);

Vue.component('index-cpf-cnpj', require('./components/IndexField'));
Vue.component('detail-cpf-cnpj', require('./components/DetailField'));
Vue.component('form-cpf-cnpj', require('./components/FormField'));
})
