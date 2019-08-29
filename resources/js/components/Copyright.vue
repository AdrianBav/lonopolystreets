<template>
    <div class="bg-gray-900 text-white text-xs px-4 py-4">
        <div>London Streets is part of <a href="https://www.bavanco.co.uk/" target="_blank">bavanco.co.uk</a></div>
        <div class="mt-1">Copyright &copy; 2002 - {{ currentYear }} Bavanco</div>
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
