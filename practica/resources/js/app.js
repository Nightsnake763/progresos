require('./bootstrap')

import Vue from 'vue'

import FormPeople from "./components/person/FormPeople";
import TablePeople from "./components/person/TablePeople";
import FormSon from "./components/person/FormSon";
import TableSon from "./components/person/TableSon";

new Vue({
    el: '#app',
    components:{
        FormPeople,
        TablePeople,
        FormSon,
        TableSon
    }
});
