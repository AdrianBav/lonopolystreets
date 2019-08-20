<template>
    <div>
        <div v-for="(location, i) in locations" :class="{'mt-6': i > 0}">

            <div class="px-4 xl:px-8">
                <h3 class="text-gray-900 text-xl">{{ location.title }}</h3>
                <p class="text-gray-600">{{ location.description }}</p>
            </div>

            <div class="mt-6 sm:overflow-x-auto sm:overflow-y-hidden">
                <div class="px-4 sm:inline-flex sm:pt-2 sm:pb-8 xl:px-8">
                    <div v-for="(property, i) in location.properties" :class="{'mt-10 sm:ml-4': i > 0 }" class="sm:mt-0 sm:w-80 sm:flex-shrink-0">
                        <property-card :property="property"></property-card>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    import PropertyCard from "./PropertyCard";

    export default {

        components: {
            PropertyCard,
        },

        props: [
            "locations",
        ],

    };
</script>
