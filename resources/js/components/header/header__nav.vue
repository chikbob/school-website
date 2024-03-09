<template>
    <div :class="cnHeader('nav')">
        <a :class="cnHeader('nav-link')" href="/about">ПРО НАС</a>
        <a :class="cnHeader('nav-link')" href="/join">ВСТУП</a>
        <a :class="cnHeader('nav-link')" href="/news">НОВИНИ</a>
        <a :class="cnHeader('nav-link')" href="/contacts">КОНТАКТИ</a>
    </div>
</template>

<script lang="ts" setup>
import {cnHeader} from "./header.const.js";
</script>

<style lang="scss" scoped>
.header__nav {
    display: flex;
    align-items: center;
    flex-direction: row;

    height: 7rem;

    &-link {
        display: flex;
        align-items: center;

        text-decoration: none;

        color: #000;

        margin: 0 0 0 6rem;

        &:visited {
            color: #000;
            text-decoration: none;

            &:hover {
                color: #c3fad5;

                transition: all .1s linear;

                cursor: pointer;
            }
        }
    }
}
</style>
