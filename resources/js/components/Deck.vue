<template>
    <div>

        <div v-show="groups.length > 0">
            <div v-for="(group, i) in groups" :key="group.id" :class="{'mt-6': i > 0}">

                <div class="px-4 xl:px-8">
                    <div class="flex items-center">
                        <span v-html="icon( group.name )"></span>
                        <h3 class="text-gray-900 text-xl ml-2">{{ group.name }}</h3>
                    </div>
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

        <div v-show="groups.length === 0" class="px-4 xl:px-8">
            No results found for selected search.
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

        methods: {
            icon( groupName ) {
                if ( groupName == "Utilities" ) {
                    return '<svg class="h-4 w-4 fill-current text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V0L8.11 5.87 3 12h4v8L17 8h-4z"/></svg>';

                } else if ( groupName == "Stations" ) {
                    return '<svg class="h-4 w-4 fill-current text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12 18H8l-2 2H3l2-2a2 2 0 0 1-2-2V2c0-1.1.9-2 2-2h10a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2l2 2h-3l-2-2zM5 5v6h10V5H5zm1.5 11a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm7 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM8 2v1h4V2H8z"/></svg>';

                } else {
                    let iconColor = this.slugify( groupName );

                    return `<svg class="h-4 w-4 fill-current ${iconColor}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm2 2v12h16V5H2z"/></svg>`;
                }
            },

            slugify ( value ) {
                return value.toString().toLowerCase().replace( /\s+/g, "-" );
            },
        },

    };
</script>
