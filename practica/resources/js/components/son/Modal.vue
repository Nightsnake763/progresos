<template>
    <div class="modal" tabindex="-1" id="ModalSon">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Son</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="store">
                        <div>
                            <label>Name</label>
                            <input class="form-control" type="text" v-model="son.name" required>
                        </div>
                        <div>
                            <label>Age</label>
                            <input class="form-control" type="number" v-model="son.age" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['person'],

        data() {
            return {
                son: {}
            }
        },

        methods: {
            async store() {
                await axios.post(`/Son/store/${this.person.id}`, this.son).then(res => {
                    if (res.data.saved) {
                        this.$parent.all_sons.push(res.data.son)
                    }
                })
            }
        }
    }
</script>
