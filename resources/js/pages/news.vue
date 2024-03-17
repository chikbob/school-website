<template>
    <PostScreen/>
</template>

<script setup>
import PostScreen from "../screens/post-screen.vue";
import {postModel} from "../screens/post-screen.model";

const props = defineProps({
    post: Object
});

const model = postModel();
model.init(props.post)
</script>

<style lang="scss" scoped>

</style>
