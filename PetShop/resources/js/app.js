import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import SliderComponent from './components/SliderComponent.vue';
import CategorieOneComponent from './components/CategorieOneComponent.vue';
import HeadComponent from './components/HeadComponent.vue';
import PerrosComponent from './components/PerrosComponent.vue';
import GatosComponent from './components/GatosComponent.vue';
import FooterComponent from './components/FooterComponent.vue';
import FormComponent from './components/FormComponent.vue';

app.component('slider-component', SliderComponent);
app.component('categorieone-component', CategorieOneComponent);
app.component('head-component', HeadComponent);
app.component('perros-component', PerrosComponent);
app.component('gatos-component', GatosComponent);
app.component('footer-component', FooterComponent);
app.component('form-component', FormComponent);

app.mount('#app');