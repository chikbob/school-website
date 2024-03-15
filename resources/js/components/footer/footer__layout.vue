<template>
    <div :class="cnFooter('layout')">
        <FooterBlock></FooterBlock>
        <FooterSocial></FooterSocial>
    </div>
</template>

<script setup lang="ts">
import {cnFooter} from "./footer.const.js";
import FooterBlock from "./footer__block.vue";
import FooterSocial from "./footer__social.vue";
</script>

<style scoped>

</style>
