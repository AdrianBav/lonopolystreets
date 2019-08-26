<template>
    <div>

        <div class="relative pb-5/6">
            <img class="absolute inset-0 h-full w-full rounded-lg shadow-md object-cover" :src="street.thumbnail" :alt="street.name">
        </div>

        <div class="relative px-4 -mt-16">
            <div class="bg-white rounded-lg px-4 py-4 shadow-lg uppercase">

                <h4 class="mt-1 text-gray-900 font-semibold text-lg inline-block">{{ street.name }}</h4>
                <span class="text-red-700">{{ street.postcode }}</span>

                <div class="mt-2 border-t border-gray-900">
                    <span class="text-red-700 text-xs tracking-wider">{{ street.borough }}</span>
                </div>

            </div>
        </div>

    </div>
</template>

<script>
    export default {

        props: [
            "street",
        ],

    };
</script>
