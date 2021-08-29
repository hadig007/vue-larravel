<template>
    <div>
        <h1 class="text-center">Home Page</h1>
        <app-list></app-list>
    </div>
</template>

<script>
import AppList from './app/AppList.vue'
export default {
    components : {
        AppList
    }
}
</script>