<template>
    <div>
        <app-bar></app-bar>
        <router-view></router-view>
        <the-footer></the-footer>
    </div>
</template>

<script>
import AppBar from './ExampleComponent.vue';
import TheFooter from './Footer.vue';
export default {
    components : {
        AppBar,
        TheFooter
    }
}
</script>

<style>
html{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}
body{
    padding: 0;
    margin: 0;
}
</style>