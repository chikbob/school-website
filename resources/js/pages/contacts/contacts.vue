<template>
    <PageLayout>
        <div :class="cnContacts('')">
            <ContactsLayout></ContactsLayout>
        </div>
    </PageLayout>
</template>

<script setup lang="ts">
import PageLayout from "../../components/layouts/page-layout/page-layout.vue";
import ContactsLayout from "./contacts__layout.vue"
import {cnContacts} from "./contacts.const.js";
</script>

<style lang="scss">
.contacts {
    width: 100%;
    height: 73dvh;

    display: flex;
    align-items: center;
    justify-content: space-around;


}
</style>
