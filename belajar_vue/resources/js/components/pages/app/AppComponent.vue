<template>
    <div class="card m-3 p-0 w-100">
        <router-link :to="{ name : 'post', params:{id} }">
        <h5 class="card-header text-center " style="background-color:rgba(151, 151, 145, 0.3)">
            {{ title }}
        </h5></router-link>
        <p class="card-body">{{ content }}</p>
    </div>
</template>

<script>
export default {
    props : [
        'title',
        'content',
        'id'
    ]
}
</script>