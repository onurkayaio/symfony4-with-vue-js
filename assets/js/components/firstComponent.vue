<template>
    <div>
        <h3>
            {{sample}}
        </h3>
        <a href="/second">go to the post.</a>
    </div>
</template>

<script>
    export default {
        name: "firstComponent",
        data() {
            return {
                sample: "hello world."
            }
        },
    }
</script>

<style scoped>
</style>