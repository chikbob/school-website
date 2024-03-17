<template>
    <PageLayout>
        <div v-for="post in model.post" :key="model.post.id">
            {{post.label}}
        </div>
    </PageLayout>
</template>

<script setup lang="ts">
import PageLayout from "../components/layouts/page-layout/page-layout.vue";
import {postModel} from "./post-screen.model";

const model = postModel();
</script>

<style lang="scss" scoped>

</style>
