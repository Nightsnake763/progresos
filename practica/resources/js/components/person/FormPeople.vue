<template>
    <form class="form" @submit.prevent="store">
        <div class="form-group">
            <div class="col-md-12">
                <label>Name</label>
                <input class="form-control" type="text" v-model="people.name">
            </div>
            <div class="col-md-12">
                <label>Last Name</label>
                <input class="form-control" type="text" v-model="people.lastName">
            </div>
            <div class="col-md-12">
                <label>Email</label>
                <input class="form-control" type="email" v-model="people.email">
            </div>
            <div class="col-md-12">
                <label>Phone</label>
                <input class="form-control" type="number" v-model="people.phone">
            </div>
            <div class="col-md-12">
                <label>Neighborhood</label>
                <input class="form-control" type="text" v-model="people.neighborhood">
            </div>
            <div class="col-md-12">
                <label>Country</label>
                <select v-model="people.country_id" class="text-dark form-control text-center">
                    <option v-for="(country, index) in country" :key="index" :value="country.id">{{ country.name }}</option>
                </select>
            </div>
            <div class="col-md-12 mt-4 text-center">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        props: ['country'],

        data() {
            return {
                people: {}
            }
        },

        methods: {
            async store() {
                await axios.post('/Person/store', this.people).then(res => {
                    console.log(res);
                })
            }
        }
    }
</script>
