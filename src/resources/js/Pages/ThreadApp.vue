<script setup lang="ts">
import {} from "vue";
import HomeLayout from "../Layouts/HomeLayout.vue";
import ThreadHome from "./Thread/ThreadHome.vue";

defineProps(['threads', 'authors']);
</script>

<template>
<HomeLayout>
    <ThreadHome
        :threads="threads"
        :authors="authors"
    ></ThreadHome>
</HomeLayout>
</template>