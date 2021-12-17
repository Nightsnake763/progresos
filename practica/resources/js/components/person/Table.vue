<template>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Neighborhood</th>
                <th>Country</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(person, index) in people" :key="index">
                <td>{{ person.name }}</td>
                <td>{{ person.lastName }}</td>
                <td>{{ person.email }}</td>
                <td>{{ person.phone }}</td>
                <td>{{ person.neighborhood }}</td>
                <td>{{ country[person.country_id - 1].name }}</td>
                <td>
                    <a :href="`/Person/edit/${ person.id }`" class="btn btn-warning">Edit</a>
                    <a @click.prevent="deletePerson(person, index)" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        props: ['people', 'country'],

        methods: {
            async deletePerson(person, index) {
                await axios.delete(`/Person/delete/${person.id}`).then(res => {
                    if (res.data.deleted) {
                        this.$parent.all_people.splice(index, 1)
                    }
                })
            }
        }
    }
</script>
