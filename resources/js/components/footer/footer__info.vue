<template>
    <div :class="cnFooter('info')">
        <div :class="cnFooter('info-logo')">
            <a href="/">
                <img :class="cnFooter('info-logo_img')" src="../../assets/logo.png" alt="logo-black.png">
            </a>
        </div>
        <div :class="cnFooter('info-credits')">
            © 2024 College of Technology. Всі права захищені
        </div>
    </div>
</template>

<script setup lang="ts">
import {cnFooter} from "./footer.const.js";
</script>

<style lang="scss" scoped>

</style>
