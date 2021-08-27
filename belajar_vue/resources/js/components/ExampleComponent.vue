<template>
<div>
    
    <nav class="title">
    <h1 >
        Hi, {{ nama}}
    </h1>
        <router-link to="/home">Home</router-link>
        <router-link to="/about">| About</router-link>
    </nav>
</div>
</template>

<script>
export default {
    data(){
        return{
        'nama' : 'Hadi Gunawan'
    }
    } 
}
</script>

<style>
body{
    margin: 0;
}
.title{
    font-family: sans-serif;
    background-color: pink;
    color: white;
    text-align: center;
    margin: 0;
    padding: 2rem;
}
</style>
