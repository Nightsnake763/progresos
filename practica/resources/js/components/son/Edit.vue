<template>
    <form class="form" @submit.prevent="store">
        <div>
            <label>Name</label>
            <input class="form-control" v-model="son.name" type="text" required>
        </div>
        <div>
        </div>
            <label>Age</label>
            <input class="form-control" v-model="son.age" type="number" required>
        </div>
        <div>
            <button type="submit" class="btn btn-primary col-12 mt-4">Save</button>
        </div>
    </form>
</template>
<script>
    export default {
        props: ['son'],

        methods: {
            async store() {
                await axios.post(`/Son/update/${this.son.id}`, this.son).then(res => {
                    if (res.data.saved) {
                        alert('saved')
                    }
                })
            }
        }
    }
</script>
