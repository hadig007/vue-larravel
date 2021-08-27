<template>
    <div>
        <h1>Home Page</h1>
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