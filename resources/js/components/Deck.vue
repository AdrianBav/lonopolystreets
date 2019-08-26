<template>
    <div>
        <div v-for="(group, i) in groups" :class="{'mt-6': i > 0}">

            <div class="px-4 xl:px-8">
                <h3 class="text-gray-900 text-xl">{{ group.name }}</h3>
                <p class="text-gray-600">{{ group.description }}</p>
            </div>

            <div class="mt-6 sm:overflow-x-auto sm:overflow-y-hidden">
                <div class="px-4 sm:inline-flex sm:pt-2 sm:pb-8 xl:px-8">
                    <div v-for="(street, i) in group.streets" :class="{'mt-10 sm:ml-4': i > 0 }" class="sm:mt-0 sm:w-80 sm:flex-shrink-0">
                        <card :street="street"></card>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    import Card from "./Card";

    export default {

        components: {
            Card,
        },

        props: [
            "groups",
        ],

    };
</script>
