<template>
    <!--Slider-->
    <div class="slider">
        <div class="slide-track">
            <div class="slide"><img src="..\..\assets\img\animales.png" alt="" /></div>
            <div class="slide"><img src="..\..\assets\img\cuidadoMascotas.png" alt="" /></div>
            <div class="slide"><img src="..\..\assets\img\mascotas.png" alt="" /></div>
            <div class="slide"><img src="..\..\assets\img\veterinario.png" alt=""></div>
            <div class="slide"><img src="..\..\assets\img\animales.png" alt="" /></div>
            <div class="slide"><img src="..\..\assets\img\cuidadoMascotas.png" alt="" /></div>
            <div class="slide"><img src="..\..\assets\img\mascotas.png" alt="" /></div>
            <div class="slide"><img src="..\..\assets\img\veterinario.png" alt=""></div>
            <div class="slide"><img src="..\..\assets\img\animales.png" alt="" /></div>
            <div class="slide"><img src="..\..\assets\img\cuidadoMascotas.png" alt="" /></div>
            <div class="slide"><img src="..\..\assets\img\mascotas.png" alt="" /></div>
            <div class="slide"><img src="..\..\assets\img\veterinario.png" alt=""></div>
            <div class="slide"><img src="..\..\assets\img\animales.png" alt="" /></div>
            <div class="slide"><img src="..\..\assets\img\cuidadoMascotas.png" alt="" /></div>
            <div class="slide"><img src="..\..\assets\img\mascotas.png" alt="" /></div>
            <div class="slide"><img src="..\..\assets\img\veterinario.png" alt=""></div>
        </div>
    </div>
</template>

<style>
/*CSS para el slider*/
.slider {
    display: flex;
    height: auto;
    margin: auto;
    overflow: hidden;
    align-items: center;
}

.slider:before {
    position: absolute;
    z-index: 1;
    left: 0;
    content: " ";
    width: 23.958%;
    height: 110px;
    /*background: linear-gradient(-90deg, hsla(0, 0%, 96.9%, 0), #f7f7f7);*/
}

.slider:after {
    position: absolute;
    right: 0;
    content: " ";
    width: 23.958%;
    height: 110px;
    background: linear-gradient(-90deg, hsla(0, 0%, 96.9%, 0), hsla(0, 0%, 96.9%, 0.99), 99%);
}

.slider .slide-track {
    display: flex;
    animation: scroll 35s linear infinite;
    -webkit-animation: scroll 35s linear infinite;
    width: calc(240px * 10);
}

.slider .slide {
    display: flex;
}

.slider .slide img {
    width: 400px;
    height: 400px;
    padding: 10px;
    /*background-color: white;*/
    cursor: pointer;
    margin: 20px;
    border-radius: 8px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px,
        rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
}

@keyframes scroll {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }

    100% {
        -webkit-transform: translateX(calc(-240px * 5));
        transform: translateX(calc(-240px * 5));
    }
}
</style>