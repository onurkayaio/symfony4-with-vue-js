<template>
    <div>
        <h3>
            {{title}}
        </h3>
        <p>
            {{body}}
        </p>
    </div>
</template>

<script>
    export default {
        name: "secondComponent",
        data() {
            return {
                title: "",
                body: ""
            }
        },
        mounted: function () {
            this.title = "title goes here.";
            this.body = "body goes here.";
        }
    }
</script>

<style scoped>
</style>