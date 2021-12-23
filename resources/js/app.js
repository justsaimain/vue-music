require("./bootstrap");

import Vue from "vue";
import App from "./App.vue";
import VueRouter from "vue-router";
import router from "./Router/index";

Vue.use(VueRouter);

const app = new Vue({
    el: "#app",
    router,
    components: { App },
});
