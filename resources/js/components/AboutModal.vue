<template>
    <Transition name="fade">
        <div class="fixed z-10 inset-0 w-full h-screen flex items-center justify-center bg-semi-75" v-show="show">

            <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg p-8">

                <h1 class="text-center text-2xl font-bold mb-4">
                    About this site
                </h1>

                <p class="text-center text-gray-700 mb-6">
                    When I lived in London, I spent some time visiting all of the streets in the London Monopoly set. I walked the entire street and took photographs.
                </p>
                <p class="text-center text-gray-700 mb-6">
                    This page showcases some of the photographs taken during these walks.
                </p>

                <div class="text-center">
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded" @click="dismiss">
                        Thanks!
                    </button>
                </div>

            </div>

        </div>
    </Transition>
</template>

<script>
    export default {

        props: {
            show: {
                type: Boolean
            },
        },

        created() {
            const escapeHandler = e => {
                if ( e.key === "Escape" && this.show ) {
                    this.dismiss();
                }
            };

            document.addEventListener( "keydown", escapeHandler );

            this.$once( "hook:destroyed", () => {
                document.removeEventListener( "keydown", escapeHandler )
            });
        },

        methods: {
            dismiss() {
                this.$emit( "close" );
            }
        }

    }
</script>

<style scoped>
    .fade-enter-active,
    .fade-leave-active {
        transition: all 0.4s;
    }
    .fade-enter,
    .fade-leave-to {
        opacity: 0;
    }
</style>
