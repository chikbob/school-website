<template>
    <div :class="cnContacts('cooperation')">
        <div :class="cnContacts('cooperation-text')">
            Для співпраці
        </div>
        <ContactsInfo>
            <template #text>
                {{ contacts.contact1.text }}
            </template>
            <template #description>
                {{ contacts.contact1.description }}
            </template>
        </ContactsInfo>
        <ContactsInfo>
            <template #text>
                {{ contacts.contact2.text }}
            </template>
            <template #description>
                {{ contacts.contact2.description }}
            </template>
        </ContactsInfo>
        <ContactsInfo :link="contacts.contact3.link" :switch="contacts.contact3.switch">
            <template #text>
                {{ contacts.contact3.text }}
            </template>
            <template #description_link>
                {{ contacts.contact3.description }}
            </template>
        </ContactsInfo>
    </div>
</template>

<script setup lang="ts">
import {cnContacts} from "./contacts.const.js";
import ContactsInfo from "./contacts__info.vue"

interface IContact {
    text: string,
    description: string,
    link?: string
    switch?: boolean
}

const contacts = {
    contact1: <IContact>{
        text: "Номер",
        description: "+38 (098) 345-67-89"
    },
    contact2: <IContact>{
        text: "Пошта",
        description: "coltechsupport@gmail.com"
    },
    contact3: <IContact>{
        text: "Адреса",
        description: "м. Київ, Павла Скоропадського 79",
        link: "https://www.google.ru/maps/place/Pavla+Skoropads'koho+St,+79,+Kyiv,+Ukraine,+02000/@50.4407206,30.5197964,19z/data=!4m5!3m4!1s0x40d4ceff198a913f:0x95e64dfc93c48b57!8m2!3d50.4407246!4d30.5201307?entry=ttu",
        switch: true
    }
}
</script>

<style lang="scss" scoped>
.contacts {
    &__cooperation {
        &-text {
            font-size: 2.5rem;
            font-weight: 600;

            margin: 0 0 4rem;
        }
    }
}
</style>
