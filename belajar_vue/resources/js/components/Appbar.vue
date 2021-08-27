<template>
<div>
    
    <nav class="title">
    <h1 >
        Hi, {{ nama}}
    </h1>
        <li><router-link class="link" to="/home">Home</router-link></li>
        <li><router-link class="link" to="/about"> About</router-link></li>
        <li><router-link class="link" to="/services"> About</router-link></li>
        <li><router-link class="link" to="/contact"> About</router-link></li>
        
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
li{
  display: inline;
}
li .link{
    background-color: rgba(255, 255, 255, 0.486);
    padding: 3px 10px;
    font-weight: bold;
    font-size: 1rem;
    text-decoration: none;
    color: white;
    transition: 0.5s;
}
li .link:hover{
    color: lightblue;
    background-color: white;
}
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
     text-decoration: none;
}
</style>
