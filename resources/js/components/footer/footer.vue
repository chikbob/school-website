<template>
    <footer :class="cnFooter()">
        <FooterLayout></FooterLayout>
        <FooterInfo></FooterInfo>
    </footer>
</template>

<script setup lang="ts">
import {cnFooter} from "./footer.const.js";
import FooterLayout from "./footer__layout.vue";
import FooterInfo from "./footer__info.vue"
</script>

<style lang="scss">
.footer {
    display: flex;
    flex-direction: column;

    margin: 132px 0 0 0;
    width: 100%;
    height: auto;

    background: #E4E4E4;

    &__layout {
        display: flex;
        flex-direction: row;
        justify-content: space-between;

        border-bottom: #A1A1A1 0.5px solid;

        margin: auto auto 24px;
        padding: 1.2rem 0 1rem;

        width: 80%;
    }

    &__block {
        display: flex;
    }

    &__links {
        margin: 0 4rem 0 0;

        &-container {
            display: flex;
            flex-direction: column;
        }

        &-text {
            color: #4F4F4F;
            font-size: 0.8rem;
            font-weight: 400;
            text-decoration-line: underline;

            margin: 10px 0 0 0;

            &_high {
                color: #000;
                font-size: 1.3rem;
                font-weight: 600;
            }
        }
    }

    &__contacts {
        margin: 0 4rem 0 0;

        &-text {
            color: #4F4F4F;
            font-size: 1rem;
            font-weight: 400;
            text-decoration-line: none;

            margin: 10px 0 0 0;

            &_high {
                color: #000;
                font-size: 1.3rem;
                font-weight: 600;
            }

            &_mini {
                color: #4F4F4F;
                font-size: 0.7rem;
                font-weight: 400;
                text-decoration-line: underline;
                width: fit-content;

                margin: 1rem 0 0 0;

                & a:visited {
                    color: #4F4F4F;
                }
            }
        }
    }

    &__community {
        &-text {
            color: #4F4F4F;
            font-size: 1rem;
            font-weight: 400;
            text-decoration-line: none;

            margin: 10px 0 0 0;

            &_high {
                color: #000;
                font-size: 1.3rem;
                font-weight: 600;
                text-decoration-line: none;
            }

            &_email {
                color: #4F4F4F;
                font-size: 1rem;
                font-weight: 400;
                text-decoration-line: underline;

                margin: 10px 0 0 0;
            }

            &_mini {
                color: #4F4F4F;
                font-size: 0.7rem;
                font-weight: 400;
                text-decoration-line: underline;

                margin: 1rem 0 0 0;

                & a:visited {
                    color: #4F4F4F;
                }
            }
        }
    }

    &__social {
        display: flex;
        margin: auto 0;

        &-block {
            display: flex;
            flex-direction: column;
        }

        &-button {
            display: flex;
            padding: 0.6rem 2.1rem;

            font-size: 0.9rem;

            border-radius: 7px;
            background: #FFF;

            &:hover {
                opacity: 0.7;
                cursor: pointer;
            }
        }

        &-links {
            display: flex;
            flex-direction: row;
            justify-content: space-between;

            margin: 1rem 0 0;
        }

        &-link {
            &:hover {
                opacity: 0.7;
                cursor: pointer;
            }

            & img {
                width: 35px;
                height: 35px
            }
        }
    }

    &__info {
        display: flex;
        margin: .5rem auto 27px;
        justify-content: space-between;
        align-items: center;
        width: 80%;

        &-logo {
            &_img {
                width: 4rem;
                height: 4rem;

                margin: 0 2rem 0 2rem;

                &:hover {
                    cursor: pointer;
                }
            }
        }

        &-credits {
            font-size: 1rem;
        }
    }
}
</style>
