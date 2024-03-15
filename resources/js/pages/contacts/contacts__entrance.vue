<template>
    <div :class="cnContacts('entrance')">
        <div :class="cnContacts('entrance-text')">
            Контакти
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
        text: "Приймальна комісія",
        description: "+38 (099) 234-56-78"
    },
    contact2: <IContact>{
        text: "Адміністрація",
        description: "+38 (068) 234-56-78"
    },
    contact3: <IContact>{
        text: "Адреса",
        description: "м. Київ, Драгоманова 25",
        link: "https://www.google.ru/maps/place/Mykhaila+Drahomanova+St,+25,+Kyiv,+Ukraine,+02000/@50.40405,30.6370218,19z/data=!4m6!3m5!1s0x40d4c5ab42905a0b:0x9ed73d06706c6c!8m2!3d50.4040893!4d30.6377866!16s%2Fg%2F1tf46nqb?entry=ttu",
        switch: true
    }
}
</script>

<style lang="scss" scoped>
.contacts {
    &__entrance {
        &-text {
            font-size: 2.5rem;
            font-weight: 600;

            margin: 0 0 4rem;
        }
    }
}

</style>
