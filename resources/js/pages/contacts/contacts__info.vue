<template>
    <div :class="cnContacts('info')">
        <div :class="cnContacts('info-text')">
            <slot name="text"></slot>
        </div>
        <div v-if="!props.switch" :class="cnContacts('info-description')">
            <slot name="description"></slot>
        </div>
        <div v-else :class="cnContacts('info-description')">
            <a style="color: #4F4F4F" :href="props.link" >
                <slot :class="cnContacts('info-description')" name="description_link"></slot>
            </a>
        </div>
    </div>
</template>

<script setup lang="ts">
import {cnContacts} from "./contacts.const.js";

const props = defineProps({
    link: String,
    switch: Boolean
})

console.log(props.link)
</script>

<style lang="scss" scoped>
.contacts {
    &__info {
        display: grid;
        grid-template-columns: 1fr 1.6fr;

        margin: 3.5rem 0 0;

        &:nth-child(2) {
            margin: 2.5rem 0 0;
        }

        &-text {
            color: #1A1A1A;

            font-size: 24px;
            font-weight: 600;
        }

        &-description {
            color: #4F4F4F;

            font-size: 20px;
            font-weight: 400;
            text-decoration-line: underline;

            margin: auto auto auto 1.5rem;
        }
    }
}
</style>
