<template>
    <div>
        <h4>
            {{ title }}
        </h4>
        <p>
            {{ content }}
        </p>
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