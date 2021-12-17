<template>
    <section>
        <backend-errors :backend_errors = "backend_errors"></backend-errors>
        <form class="form" @submit.prevent="store">
            <div class="form-group">
                <div class="col-md-12">
                    <label>Name</label>
                    <input class="form-control" type="text" required v-model="person.name">
                </div>
                <div class="col-md-12">
                    <label>Last Name</label>
                    <input class="form-control" type="text" required v-model="person.lastName">
                </div>
                <div class="col-md-12">
                    <label>Email</label>
                    <input class="form-control" type="email" required v-model="person.email">
                </div>
                <div class="col-md-12">
                    <label>Phone</label>
                    <input class="form-control" type="number" required v-model="person.phone">
                </div>
                <div class="col-md-12">
                    <label>Neighborhood</label>
                    <input class="form-control" type="text" required v-model="person.neighborhood">
                </div>
                <div class="col-md-12">
                    <label>Country</label>
                    <select v-model="person.country_id" required class="text-dark form-control text-center">
                        <option v-for="(country, index) in country" :key="index" :value="country.id">{{ country.name }}</option>
                    </select>
                </div>
                <div class="col-md-12 mt-4 text-center">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>
        </form>
    </section>
</template>

<script>
    import BackendErrors from "../BackendErrors";

    export default {
        props: ['country', 'person', 'update'],
        components: {BackendErrors},

        data() {
            return {
                backend_errors: {}
            }
        },

        methods: {
            async store() {
                if (this.update){
                    await axios.post(`/Person/update/${this.person.id}`, this.person).then(res => {
                        if (res.data.saved){
                            alert("saved")
                        }
                    })
                }
                else{
                    await axios.post('/Person/store', this.person).then(res => {
                        if (res.data.saved) {
                            this.$parent.all_people.push(res.data.person),
                            this.backend_errors = {}
                        }
                    }).catch(err => {
                        this.backend_errors = err.response.data.errors
                    })
                }
            }
        }
    }
</script>
