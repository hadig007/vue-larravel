<template>
    <div>
        <div class="container" v-if="!isLoading">
            <div class="row mb-1" style="background-color:rgba(245, 136, 141, 0.27)"
            v-for="row in rows"
            :key="'row' + row">
                <div class="col-md p-0 d-flex align-content-stretch "
                v-for="(post, column) in posts.slice((row - 1) * columns, row * columns)"
                :key="'row' + row + column">
                        <app-component
                    v-bind="post"
                    ></app-component>
                </div>
            </div>
        </div>   
        <div v-else class="d-flex justify-content-around mt-5"><p class="badge p-3" style="background-color:rgba(191, 255, 144, 1)">loading data...</p></div>
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
            // id : null,
            columns: 3,
            isLoading : false,
        } 
    },
    computed:{
        rows(){
            return this.posts === null ? 0 :
            Math.ceil(this.posts.length / this.columns);
           
        }
    },
    created(){ 
        this.isLoading = true;
        const request = axios.get("/api/posts")
        .then(response => {
            this.posts = response.data.data;
            this.isLoading=false});
    }
    
}
</script>