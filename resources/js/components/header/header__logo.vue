<template>
    <div :class="cnHeader('logo')">
        <a href="/">
            <img :class="cnHeader('logo-img')" src="../../assets/logo.png" alt="logo-black.png">
        </a>
    </div>
</template>

<script lang="ts" setup>
import {cnHeader} from "./header.const.js";
</script>

<style lang="scss" scoped>
.header__logo {
    margin: 0 0 0 2rem;

    &-img {
        width: 4rem;
        height: 4rem;

        margin: 0 2rem 0 2rem;

        &:hover {
            cursor: pointer;
        }
    }
}
</style>
