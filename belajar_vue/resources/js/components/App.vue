<template>
    <div>
        <app-bar></app-bar>
        <div class="container">
        <router-view></router-view>
        </div>
        <the-footer></the-footer>
    </div>
</template>

<script>
import AppBar from './Appbar.vue';
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
    font-family: sans-serif;
    min-height: 100%;
}
body{
    padding: 0;
    margin: 0;
    background-color: rgba(214, 214, 214, 0.363);
}
.container{
    background-color: white;
    box-shadow: 1px 1px 15px 3px rgba(0, 0, 0,0.4px);
}
</style>