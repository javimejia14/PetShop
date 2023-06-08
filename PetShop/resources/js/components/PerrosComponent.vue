<template>
    <!--Content dogs-->
    <h2 class="letter">Perros</h2>
    <div class="card-group mt-3 text-center">
        <div class="card" v-for="perro in perros" :key=perro.id>
            <img :src="perro.imagen" class="imagens" alt="..."/>
            <div class="card-body">
                <h4>Nombre:</h4>
                <h5 class="card-title letter_pr">{{ perro.nombre }}</h5>
                <h4>Descripción:</h4>
                <p class="card-text letter_pr">
                    {{ perro.descripcion }}
                </p>

            </div>
        </div>

    </div>
</template>
<script>
import axios from "axios";

export default {
    data() {
        return {
            perros: []
        };
    },
    mounted() {
        this.obtenerPerros();

    },
    methods: {
        obtenerPerros() {
            axios.get('/getperro')
                .then(response => {
                    this.perros = response.data;
                })
        },
    }
}
</script>
<style>
.letter {
    font-size: 45px;
    margin-top: 5px;
    color: white;
    text-align: center;
}

.letter_pr{
    font-size: 18px;
    color: rgb(249, 249, 244);
}
h4{
    font-weight: bold;
    color: white;
}
.imagens{
    height: 200px;
    width: 200px;
    align-content: center;
}
</style>