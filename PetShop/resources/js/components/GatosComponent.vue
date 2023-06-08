<template>
    <!--Content cats-->
    <h2 class="letter">Animales listos para ser adoptados</h2>
    <h2 class="letter">Gatos</h2>
    <div class="card-group mt-3 text-center row">
        <div class="card" v-for="gato in gatos" :key=gato.id>
            <img :src="gato.imagen" class="imagens" alt="..." />
            <div class="card-body">
                <h4>Nombre:</h4>
                <h5 class="card-title letter_pr">{{ gato.nombre }}</h5>
                <h4>Descripción:</h4>
                <p class="card-text letter_pr">
                    {{ gato.descripcion }}
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
            gatos: []

        };
    },
    mounted() {
        this.obtenerGatos();
    },
    methods: {
        obtenerGatos() {
            axios.get('/getgato')
                .then(response => {
                    this.gatos = response.data;
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