<template>
    <div :class="cnFooter('block')">
        <div :class="cnFooter('links')">
            <div :class="cnFooter('links-text_high')">Посилання</div>
            <div :class="cnFooter('links-container')">
                <a href="/about">
                    <div :class="cnFooter('links-text')">ПРО НАС</div>
                </a>
                <a href="/news">
                    <div :class="cnFooter('links-text')">НОВИНИ</div>
                </a>
                <a href="/contacts">
                    <div :class="cnFooter('links-text')">КОНТАКТИ</div>
                </a>
                <a href="/join">
                    <div :class="cnFooter('links-text')">ВСТУП</div>
                </a>
            </div>
        </div>
        <div :class="cnFooter('contacts')">
            <div :class="cnFooter('contacts-text_high')">Контакти</div>
            <div :class="cnFooter('contacts-text')">+38 (099) 234-56-78</div>
            <div :class="cnFooter('contacts-text')">+38 (068) 234-56-78</div>
            <a href="https://www.google.com/maps/place/Mykhaila+Drahomanova+St,+25,+Kyiv,+Ukraine,+02000/@50.40405,30.6370218,19z/data=!4m6!3m5!1s0x40d4c5ab42905a0b:0x9ed73d06706c6c!8m2!3d50.4040893!4d30.6377866!16s%2Fg%2F1tf46nqb?entry=ttu">
                <div :class="cnFooter('contacts-text_mini')">
                    м. Київ, Драгоманова 25
                </div>
            </a>
        </div>
        <div :class="cnFooter('community')">
            <div :class="cnFooter('community-text_high')">Для співпраці</div>
            <div :class="cnFooter('community-text')">+38 (098) 345-67-89</div>
            <div :class="cnFooter('community-text_email')">coltechsupport@gmail.com</div>
            <a href="https://www.google.com/maps/place/Pavla+Skoropads'koho+St,+79,+Kyiv,+Ukraine,+02000/@50.4407206,30.5197964,19z/data=!4m5!3m4!1s0x40d4ceff198a913f:0x95e64dfc93c48b57!8m2!3d50.4407246!4d30.5201307?entry=ttu">
                <div :class="cnFooter('community-text_mini')">
                    м. Київ, Павла Скоропадського 79
                </div>
            </a>
        </div>
    </div>
</template>

<script setup lang="ts">
import {cnFooter} from "./footer.const.js";
</script>

<style lang="scss" scoped>

</style>
