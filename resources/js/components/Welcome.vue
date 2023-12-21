<template>
    <img src="src/images/vue.png" />
    <img src="src/images/laravel.png" />
    <h1>Index is loaded!</h1>

</template>

<script>
    export default {
        mounted() {
            console.log("%c Component Welcome is mounted", "color: red, backound: #f3f3f3; padding:10px;");
        }
    }
</script>
