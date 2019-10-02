<template>
    <div class="bg-gray-900 text-white px-4 py-4">
        <div class="text-gray-500 text-sm font-semibold">London Monopoly Streets</div>
        <div class="mt-1 text-xs">Copyright &copy; 2002 - {{ currentYear }} Bavanco</div>
    </div>
</template>

<script>
    export default {

        computed: {
            currentYear: function() {
                return ( new Date() ).getFullYear();
            },
        },

    };
</script>
