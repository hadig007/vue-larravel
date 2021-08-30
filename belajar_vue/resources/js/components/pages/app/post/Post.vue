<template>
    <div>
        <hr>
        <div class="container">
            <div class="row" v-if="!isLoading">
                    <div class="col-md-8">{{ posts.title }}</div>
                    <div class="col-md-4">{{ posts.content }}</div>
            </div>
            <div v-else class="d-flex justify-content-around mt-5"><p class="badge p-3" style="background-color:rgba(191, 255, 144, 1)">loading data...</p></div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            posts:'',
            isLoading : true
        }
    },
    created(){
        this.isLoading =  true
        axios.get(`/api/posts/${this.$route.params.id}`)
        .then(response => {this.posts = response.data;
        this.isLoading = false});
    }
}
</script>