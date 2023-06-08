<template>
    <!--Form-->
    <div class="form">
        <h2 class="text-center">Contáctanos para adoptar</h2>
        <form @submit.preventDefault()="submitForm">
            <div class="row mb-3">
                <div class="col">
                    <label for="nombre" class="form-label">Nombres</label>
                    <input type="text" id="nombre" v-model="nombre" class="form-control" placeholder="Ingrese su nombre"
                        aria-label="First name" required>
                </div>
                <div class="col">
                    <label for="apellido" class="form-label">Apellidos</label>
                    <input type="text" id="apellido" v-model="apellido" class="form-control"
                        placeholder="Ingrese su apellido" aria-label="Last name" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="apellido" class="form-label">Edad</label>
                    <input type="number" id="edad" v-model="edad" class="form-control" placeholder="Ingrese su edad"
                        required>
                </div>
                <div class="col">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" v-model="email" class="form-control" id="email" placeholder="name@example.com"
                        required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="apellido" class="form-label">Teléfono</label>
                    <input type="number" id="numero" v-model="numero" class="form-control"
                        placeholder="Ingrese su número de telefono" required>
                </div>
                <div class="col">
                    <label for="mascota" class="form-label">Nombre de la mascota</label>
                    <input type="text" v-model="nombre_mascota" class="form-control" id="nombre_mascota"
                        placeholder="Ingrese nombre de la mascota que desea adoptar" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="texto" class="form-label">Razón por la que quiere adoptar</label>
                <textarea v-model="texto" class="form-control" id="texto" rows="4" required></textarea>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-outline-success" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            nombre: '',
            apellido: '',
            edad: '',
            email: '',
            numero: '',
            nombre_mascota: '',
            texto: ''
        };
    },
    methods: {
        submitForm() {
            const formData = {
                nombre: this.nombre,
                apellido: this.apellido,
                edad: this.edad,
                email: this.email,
                numero: this.numero,
                nombre_mascota: this.nombre_mascota,
                texto: this.texto,
            };

            axios.post('/postdatos', formData)
                .then(response => {
                    console.log(response.data);
                    console.log('se guardan');
                })
                .catch(error => {
                    console.error(error);
                    console.log('No se guardan');
                });
        }
    }
}
</script>
<style>
.form {
    margin-left: 25px;
    margin-right: 25px;
    margin-top: 50px;
    margin-bottom: 20px;
    color: white;
}
</style>