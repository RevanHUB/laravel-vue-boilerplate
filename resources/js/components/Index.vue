
<script setup>
    import Welcome from './Welcome.vue';
</script>
<template>
    <div id="root">
        <Welcome />
    </div>    
</template>



<script>
    export default {
        mounted() {
            console.log("%c Component Index is mounted", "color: red, backound: #f3f3f3; padding:10px;")
        }
    }
</script>
