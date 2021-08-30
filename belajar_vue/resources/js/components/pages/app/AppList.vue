<template>
    <div>
        <div class="container">
            <div class="row mb-1" style="background-color:rgba(245, 136, 141, 0.27)"
            v-for="row in rows"
            :key="'row' + row">
                <div class="col p-0 d-flex align-content-stretch "
                v-for="(post, column) in posts.slice((row - 1) * columns, row * columns)"
                :key="'row' + row + column">
                        <app-component
                    v-bind="post"
                    ></app-component>
                </div>
            </div>
        </div>   
    </div>
</template>

<script>
import AppComponent from './AppComponent.vue'
export default {
    components : {
        AppComponent,
    },
    data(){
        return{
            posts : null,
            id : null,
            columns: 3
        } 
    },
    computed:{
        rows(){
            return this.posts === null ? 0 :
            Math.ceil(this.posts.length / this.columns);
           
        }
    },
    created(){ 
        const request = axios.get("/api/posts")
        .then(response => (this.posts = response.data))
    }
    
}
</script>