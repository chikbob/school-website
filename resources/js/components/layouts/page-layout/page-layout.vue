<template>
    <Header/>
    <slot/>
<!--    <Footer/>-->
</template>

<script setup>
import Header from "../../header/header.vue";
// import Footer from "@/components/footer/footer.vue";
</script>

<style>
body {
    min-height: 100lvh;

    margin: 0;
    border: 0;
}
</style>
