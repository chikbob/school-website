<template>
    <div :class="cnContacts('layout')">
        <ContactsEntrance></ContactsEntrance>
        <ContactsCooperation></ContactsCooperation>
    </div>
</template>

<script setup lang="ts">
import {cnContacts} from "./contacts.const.js";
import ContactsEntrance from "./contacts__entrance.vue"
import ContactsCooperation from "./contacts__cooperation.vue"
</script>

<style lang="scss" scoped>
.contacts {
    &__layout {
        display: flex;
        justify-content: space-around;
        width: 80%;
        height: 253px;
    }
}
</style>
