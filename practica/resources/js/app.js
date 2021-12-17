require('./bootstrap')

import Vue from 'vue'

import IndexPerson from "./components/person/Index";
import FormPeople from "./components/person/Form";
import TableSon from "./components/son/Table";
import EditPerson from "./components/person/Edit";
import EditSon from "./components/son/Edit";

new Vue({
    el: '#app',
    components:{
        IndexPerson,
        FormPeople,
        TableSon,
        EditPerson,
        EditSon
    }
});
