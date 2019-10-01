<template>
    <div>
        <site-header v-model="searchText" class="xl:flex-shrink-0"></site-header>

        <div class="xl:flex-1 xl:flex xl:overflow-y-hidden">
            <search-filters :postcodes=postcodes v-bind:value="priceRange" v-on:input="priceRange = $event"></search-filters>

            <main class="py-6 xl:flex-1 xl:overflow-x-hidden">
                <deck :groups=filteredGroups></deck>
            </main>

            <copyright class="xl:hidden"></copyright>
        </div>
    </div>
</template>

<script>
    import SiteHeader from "./SiteHeader";
    import SearchFilters from "./SearchFilters";
    import Copyright from "./Copyright";

    export default {

        components: {
            SiteHeader,
            SearchFilters,
            Copyright,
        },

        props: [
            "groups",
            "postcodes",
        ],

        data() {
            return {
                searchText: "",
                priceRange: 400,
            };
        },

        computed: {
            filteredGroups: function() {
                // Type
                // if ( this.type != "all" ) {
                //     if ( this.type == "utility" ) {
                //         return this.groups.filter( group => group.name == "Utilities" );
                //     } else if ( this.type == "station" ) {
                //         return this.groups.filter( group => group.name == "Stations" );
                //     } else {
                //         return this.groups.filter( group => group.name != "Utilities" && group.name != "Stations" );
                //     }
                // }

                // Price Range
                if ( this.priceRange < 400 ) {
                    return this.groups.filter( group =>
                        group.price < this.priceRange
                    );
                }

                // Search
                if ( this.searchText ) {
                    return this.groups.filter( group =>
                        group.streets
                            .reduce( ( streetNames, street ) =>
                                streetNames.concat( street.name.toLowerCase() ), []
                            )
                            .includes( this.searchText.toLowerCase() )
                    );
                }

                return this.groups;
            },
        },

    }
</script>
