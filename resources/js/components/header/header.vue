<template>
    <header :class="cnHeader()">
        <HeaderLogo/>
        <HeaderNav/>
    </header>
</template>

<script lang="ts" setup>
import {cnHeader} from "./header.const.js";
import HeaderLogo from "./header__logo.vue";
import HeaderNav from "./header__nav.vue";
</script>

<style lang="scss">
.header {
    display: flex;
    align-items: center;
    justify-content: space-between;

    width: 100%;
    height: 7rem;

    background: #6FD08C;
}
</style>
