<template>
    <section>
        <h2>Sons</h2>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>age</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(son, index) in all_sons" :key="index">
                    <td>{{ son.name }}</td>
                    <td>{{ son.age }}</td>
                    <td>
                        <a :href="`/Son/edit/${ son.id }`" class="btn btn-warning">Edit</a>
                        <a @click.prevent="deleteSon(son, index)" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-primary col-12" @click="addSon">Add Son</button>

        <modal :person="person"/>
    </section>
</template>

<script>
    import Modal from "./Modal";

    export default {
        props: ['sons', 'person'],

        data() {
            return {
                all_sons: this.sons,
            }
        },

        components: {
            Modal
        },

        methods: {
            async deleteSon(son, index) {
                await axios.delete(`/Son/delete/${son.id}`).then(res => {
                    if (res.data.deleted) {
                        this.all_sons.splice(index, 1)
                    }
                })
            },

            addSon() {
                $('#ModalSon').modal('show')
            }
        }
    }
</script>
