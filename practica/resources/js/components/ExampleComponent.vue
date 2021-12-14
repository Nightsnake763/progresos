<template>
    <section class="container mt-4">
        <h1>Calculadora</h1>
        <div class="form-group">
            <div>
                <label>Numero 1</label>
                <input type="number" class="form-control" v-model="numero_1">
            </div>
            <div>
                <label>Numero 2</label>
                <input type="number" class="form-control" v-model="numero_2">
            </div>
            <div class="mt-4">
                <button class="btn btn-primary" @click="sumar">Sumar</button>
            </div>
            <p>El resultado de la suma es: {{ suma }}</p>
        </div>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                numero_1: 0,
                numero_2: 0,
                suma: 0,
            }
        },

        methods: {
            sumar() {
                this.suma = Number(this.numero_1) + Number(this.numero_2)
            }
        }
    }
</script>
