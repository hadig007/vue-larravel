<template>
    <div>
         <div class="card">
        <h5 class="card-header text-center " style="rgba(151, 151, 145, 1)">
            {{ posts.title }}
        </h5>
        <p class="card-body">{{ posts.content }}</p>
    </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            posts:'',
        }
    },
    created(){
        axios.get(`/api/posts/${this.$route.params.id}`)
        .then(response => (this.posts = response.data))
    }
}
</script>