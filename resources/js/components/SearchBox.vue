<template>

    <input
        class="block w-full focus:outline-none focus:bg-white rounded-lg pl-10 pr-4 py-2"
        placeholder="Search by keywords"
        v-model="searchText"
    >

</template>

<script>
    export default {

        props: {
            value: String,
        },

        data() {
            return {
                searchText: this.value,
            };
        },

        watch: {
            searchText() {
                this.$emit( "input", this.searchText );
            },
        },

    };
</script>
