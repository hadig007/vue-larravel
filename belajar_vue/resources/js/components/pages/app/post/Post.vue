<template>
    <div>
        <hr>
        <div class="container ">
            <div class="row" v-if="!isLoading">
                    <div class="col-md-8">
                        <div class="card  p-0">
                        <h5 class="card-header text-center " style="background-color:rgba(245, 136, 141, 0.27)">
                            {{ posts.title }}
                        </h5>
                        <p class="card-body">{{ posts.content }}</p>
                    </div>
                    </div>
                    <div class="col-md-4">
                        <availability class="mt-3"></availability>
                    </div>
            </div>
            <div v-else class="d-flex justify-content-around mt-5"><p class="badge p-3" style="background-color:rgba(191, 255, 144, 1)">loading data...</p></div>
        </div>
    </div>
</template>

<script>
import Availability from './Availability.vue'
export default {
  components: { Availability },
    data(){
        return{
            posts:'',
            isLoading : true
        }
    },
    created(){
        this.isLoading =  true
        axios.get(`/api/posts/${this.$route.params.id}`)
        .then(response => {this.posts = response.data.data;
        this.isLoading = false});
    }
}
</script>