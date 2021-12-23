<template>
    <div class="app">
        <Navbar></Navbar>
        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
import Navbar from "./Components/Navbar.vue";
export default {
    name: "app",
    components: { Navbar },
};
</script>
