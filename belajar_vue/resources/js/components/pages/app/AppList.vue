<template>
    <div>
        <div class="container">
            rows {{ rows }}
            <div class="row bg-info mb-1"
            v-for="row in rows"
            :key="'row' + row">
                <div class="col p-0 d-flex align-content-stretch "
                v-for="(post, column) in posts.slice((row - 1) * columns, row * columns)"
                :key="'row' + row + column">
                    <list-one
                    :title="post.title"
                    :content="post.content"
                    ></list-one>
                </div>
            </div>
        </div>   
    </div>
</template>

<script>
import ListOne from './App1.vue'
import ListTwo from './App2.vue'
import ListThree from './App3.vue'
import ListFour from './App4.vue'
import ListFive from './App5.vue'
import ListSix from './App6.vue'
import ListSeven from './App7.vue'
import ListEight from './App8.vue'
import ListNine from './App9.vue'
import ListTen from './App10.vue'
export default {
    components : {
        ListOne,
        ListTwo,
        ListThree,
        ListFour,
        ListFive,
        ListSix,
        ListSeven,
        ListEight,
        ListNine,
        ListTen,
    },
    data(){
        return{
            posts : null,
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
        const request = axios.get("/api/posts").then(response => (this.posts = response.data))
    }
    
}
</script>