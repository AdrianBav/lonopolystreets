<template>
    <div>
        <site-header v-model="searchText" class="xl:flex-shrink-0"></site-header>

        <div class="xl:flex-1 xl:flex xl:overflow-y-hidden">
            <search-filters
                :postcodes=postcodes
                :property-range-value="priceRange" @propertyRangeInput="priceRange = $event"
                :property-type-checked="propertyType" @propertyTypeChange="propertyType = $event"
                :postcode-checked="postcode" @postcodeChange="postcode = $event"
            >
            </search-filters>

            <main class="py-6 xl:flex-1 xl:overflow-x-hidden">
                <card-deck :groups=filteredGroups></card-deck>
            </main>

            <copyright-footer class="xl:hidden"></copyright-footer>
        </div>
    </div>
</template>

<script>
    import CardDeck from "./CardDeck";
    import SiteHeader from "./SiteHeader";
    import SearchFilters from "./SearchFilters";
    import CopyrightFooter from "./CopyrightFooter";

    export default {

        components: {
            CardDeck,
            SiteHeader,
            SearchFilters,
            CopyrightFooter,
        },

        props: {
            groups: Object,
            postcodes: Array,
        },

        data() {
            return {
                searchText: "",
                priceRange: "400",
                propertyType: "all",
                postcode: [],
            };
        },

        computed: {
            filteredGroups: function() {
                // Postcode
                if ( this.postcode.length > 0 ) {
                    if ( this.postcode == "E1" ) {
                        return this.groups.filter( group => group.id == 1 );
                    } else if ( this.postcode == "EC2" ) {
                        return this.groups.filter( group => group.id == 2 );
                    } else if ( this.postcode == "EC3" ) {
                        return this.groups.filter( group => group.id == 3 );
                    } else {
                        return this.groups.filter( group => group.id == 4 );
                    }
                }

                // Property Type
                if ( this.propertyType != "all" ) {
                    if ( this.propertyType == "utility" ) {
                        return this.groups.filter( group => group.name == "Utilities" );
                    } else if ( this.propertyType == "station" ) {
                        return this.groups.filter( group => group.name == "Stations" );
                    } else {
                        return this.groups.filter( group => group.name != "Utilities" && group.name != "Stations" );
                    }
                }

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
