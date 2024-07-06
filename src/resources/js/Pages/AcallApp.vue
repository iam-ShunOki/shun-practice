<script setup lang="ts">
import HomeLayout from "../Layouts/HomeLayout.vue";
import AcallHome from "./Acall/AcallHome.vue";
defineProps(['authors', 'threads']);
</script>

<template>
    <HomeLayout>
        <AcallHome
        
        ></AcallHome>
    </HomeLayout>
</template>