<template>
    <section>
        <form-people :country="country" :person="person" :update="update"></form-people>
        <table-son :sons="all_sons" :person="person"></table-son>
    </section>
</template>

<script>
    import FormPeople from "./Form";
    import TableSon from "../son/Table";

    export default {
        props: ['country', 'person', 'sons'],

        components: {
            FormPeople,
            TableSon
        },

        data() {
            return {
                update: true,
                all_sons: this.sons
            }
        }
    }
</script>
