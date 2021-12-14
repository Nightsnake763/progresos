<template>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(son, index) in sons" :key="index">
                <td>{{ son.name }}</td>
                <td>{{ son.age }}</td>
                <td>
                    <a :href="`/Person/edit/${ son.id }`" class="btn btn-warning">Edit</a>
                    <a :href="`/Person/delete/${ son.id }`" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        props: ['sons']
    }
</script>
