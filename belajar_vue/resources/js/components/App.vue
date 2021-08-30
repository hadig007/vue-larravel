<template>
    <div >
        <app-bar></app-bar>
        <div class="wrapper">
        <router-view></router-view>
        </div>
    </div>
</template>

<script>
import AppBar from './Appbar.vue';

export default {
    components : {
        AppBar,
    },
   
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
.pembungkus{
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}
.wrapper{
    background-color: white;
    box-shadow: 1px 1px 15px 3px rgba(0, 0, 0,0.4px);
}
.footer{
    position: absolute;
    bottom: 0;
    width: 100%;
}
</style>