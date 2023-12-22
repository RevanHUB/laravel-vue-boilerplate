
<script setup>

    const props = defineProps({
        props: Object
    })

    let user = props.props;
    console.log(user);

</script>
<template>
    <div id="root">
        <Welcome />
        <h3 style="margin:10px 0px">Props result: </h3>
        <div v-for="(data) in user">
            <p>{{data}}</p>
        </div>
    </div>    
</template>

<script>
    export default {
        mounted() {
            console.log("%c Component Index is mounted", "color: red, backound: #f3f3f3; padding:10px;")
        }
    }
    
</script>
