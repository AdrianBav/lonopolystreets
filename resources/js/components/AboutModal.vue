<template>
    <div class="fixed z-10 inset-0 w-full h-screen flex items-center justify-center" style="background-color: rgba(0, 0, 0, 0.75);" v-show="show">

        <div class="w-full max-w-2xl bg-white shadow-lg rounded-lg p-8">

            <h1 class="text-center text-2xl font-bold mb-4">
                About this site
            </h1>

            <p class="text-center text-gray-700 mb-6">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At ut eligendi quod tempore totam explicabo sit consectetur architecto? Tempora, repellat est rem ut esse ab officia saepe ratione tempore. Obcaecati.
            </p>

            <div class="text-center">
                <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded" @click="dismiss">
                    Thanks!
                </button>
            </div>

        </div>

    </div>
</template>

<script>
    export default {

        props: [
            "show"
        ],

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
