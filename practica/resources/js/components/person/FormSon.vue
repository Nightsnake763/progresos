<template>
    <form class="form" @submit.prevent="storeSon">
        <div>
            <label>Name</label>
            <input class="form-control" type="text" v-model="sons.name">
        </div>
        <div>
            <label>Age</label>
            <input class="form-control" type="number" v-model="sons.age">
        </div>
        <div class="mt-4 text-center">
            <button class="btn btn-primary" type="submit">Add</button>
        </div>
    </form>
</template>

<script>
    export default {
        props: ['person'],

        data() {
            return {
                sons: {}
            }
        },

        methods: {
            async storeSon() {
                await axios.post(`'/Person/addSon/${this.person}'`, this.sons).catch(console.log(this.person))
            }
        }
    }
</script>
