<template>
    <div class="card m-3 p-0">
        <h3 class="card-title text-center">{{ title }}</h3>
        <p class="card-body">{{ content }}</p>
    </div>
</template>

<script>
export default {
    props : [
        'title',
        'content',
    ]
}
</script>