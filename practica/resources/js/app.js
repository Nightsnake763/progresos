require('./bootstrap')

import Vue from 'vue'

import FormPeople from "./components/person/FormPeople";

new Vue({
    el: '#app',
    components:{
        FormPeople
    }
});
