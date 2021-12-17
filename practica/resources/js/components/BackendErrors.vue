<template>
    <div class="alert alert-danger" v-if="show">
        <ul>
            <li v-for="(error, key) in backend_errors" :key="key">
                <span v-for="(errorItem, innerKey) in error" :key="innerKey">{{ errorItem }}</span>
            </li>
        </ul>
    </div>
</template>
<script>
    export default {
        props: ['backend_errors'],

        data() {
            return {
                show: false,
            }
        },

        watch: {
            backend_errors() {
                _.isEmpty(!this.backend_errors) ? this.show = true : this.show = false
            }
        }
    }
</script>
