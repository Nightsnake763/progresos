<template>
    <div class="modal" tabindex="-1" id="ModalCountry">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Country</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="store">
                        <div>
                            <label>Name</label>
                            <input class="form-control" type="text" v-model="country.name" required>
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
        data() {
            return {
                country: {}
            }
        },

        methods: {
            async store() {
                await axios.post(`/Country/store/`, this.country).then(res => {
                    if (res.data.saved) {
                        this.$parent.all_countries.push(res.data.country)
                    }
                })
            }
        }
    }
</script>
