import Hero from './components/src/Hero.vue';
import PartnerSearch from './components/src/PartnerSearch.vue';
import AnimatedTyping from './components/src/AnimatedTyping.vue'
import Solution from './components/src/Solution.vue';
import VideoBg from 'vue-videobg';
import Vue from 'vue';
import VueLazyload from 'vue-lazyload';

import '../sass/style.sass';
import '../sass/style-ent.sass';

require('./bootstrap/carousel.js');
require('jquery-touchswipe');
require('formvalidation');

Vue.use(VueLazyload, {
  preLoad: 1.3,
  error: 'dist/error.png',
  loading: 'dist/loading.gif',
  attempt: 1,
  lazyComponent: true,
  listenEvents: ['scroll']
});

new Vue({
    el: 'main',
    components: {
        Hero,
        AnimatedTyping,
        PartnerSearch,
        VideoBg,
    },
});
