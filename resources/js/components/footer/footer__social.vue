<template>
    <div :class="cnFooter('social')">
        <div :class="cnFooter('social-block')">
            <div :class="cnFooter('social-button')">Написати нам</div>
            <div :class="cnFooter('social-links')">
                <div :class="cnFooter('social-link')">
                    <a href="https://www.instagram.com/" target="_blank">
                        <img src="../../assets/Insta.svg" alt="Insta.svg">
                    </a>
                </div>
                <div :class="cnFooter('social-link')">
                    <a href="https://twitter.com/" target="_blank">
                        <img src="../../assets/Twitter.svg" alt="Twitter.svg">
                    </a>
                </div>
                <div :class="cnFooter('social-link')">
                    <a href="https://telegram.org/" target="_blank">
                        <img src="../../assets/Telegram.svg" alt="Telegram.svg">
                    </a>
                </div>
                <div :class="cnFooter('social-link')">
                    <a href="https://www.facebook.com/" target="_blank">
                        <img src="../../assets/Facebook.svg" alt="Facebook.svg">
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import {cnFooter} from "./footer.const.js";
</script>

<style lang="scss" scoped>

</style>
