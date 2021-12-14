require('./bootstrap')

import Vue from 'vue'

import FormPeople from "./components/person/FormPeople";
import TablePeople from "./components/person/TablePeople";

new Vue({
    el: '#app',
    components:{
        FormPeople,
        TablePeople
    }
});
