<template>
    <section>
        <form-people :person="person" :country="all_countries" :update="update"></form-people>
        <table-people :people="all_people" :country="country"></table-people>
        <button class="btn btn-primary col-12" @click="addCountry()">Add Country</button>

        <modal-country></modal-country>
    </section>
</template>

<script>
    import FormPeople from "./Form";
    import TablePeople from "./Table";
    import ModalCountry from "../country/Modal";

    export default {
        props: ['people', 'country'],

        components: {
            FormPeople,
            TablePeople,
            ModalCountry
        },

        data() {
            return {
                update: false,
                person: {},
                all_people: this.people,
                all_countries: this.country,
            }
        },

        methods: {
            addCountry() {
                $('#ModalCountry').modal('show')
            }
        }
    }
</script>
