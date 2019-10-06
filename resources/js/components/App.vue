<template>
    <div>
        <site-header
            class="xl:flex-shrink-0"
            :header-search-value="searchText" @headerSearchInput="searchText = $event"
        ></site-header>

        <div class="xl:flex-1 xl:flex xl:overflow-y-hidden">
            <search-filters
                :postcodes=postcodes
                :filter-search-value="searchText" @filterSearchInput="searchText = $event"
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
            groups: Array,
            postcodes: Array,
        },

        data() {
            return {
                selectedGroups: [],
                searchText: "",
                priceRange: "400",
                propertyType: "all",
                postcode: [],
            };
        },

        computed: {
            filteredGroups: function() {
                this.selectedGroups = JSON.parse( JSON.stringify( this.groups ) );

                if ( this.postcode.length > 0 ) {
                    this.filterByPostcode();
                }

                if ( this.propertyType != "all" ) {
                    this.filterByPropertyType();
                }

                if ( this.priceRange < 400 ) {
                    this.filterByPriceRange();
                }

                if ( this.searchText.length > 0 ) {
                    this.filterBySearchText()
                }

                return this.selectedGroups;
            },
        },

        methods: {
            filterBySearchText() {
                this.selectedGroups = this.selectedGroups
                    .filter( group =>
                        group.streets = group.streets.filter( street =>
                            street.name.toLowerCase().includes( this.searchText.toLowerCase() )
                        ),
                    )
                    .filter( group =>
                        group.streets.length > 0
                    );
            },

            filterByPriceRange() {
                this.selectedGroups = this.selectedGroups
                    .filter( group =>
                        group.streets = group.streets.filter( street =>
                            street.price < this.priceRange
                        ),
                    )
                    .filter( group =>
                        group.streets.length > 0
                    );
            },

            filterByPropertyType() {
                if ( this.propertyType == "utility" ) {
                    this.selectedGroups = this.selectedGroups.filter( group => group.name == "Utilities" );
                } else if ( this.propertyType == "station" ) {
                    this.selectedGroups = this.selectedGroups.filter( group => group.name == "Stations" );
                } else {
                    this.selectedGroups = this.selectedGroups.filter( group => group.name != "Utilities" && group.name != "Stations" );
                }
            },

            filterByPostcode() {
                this.selectedGroups = this.selectedGroups
                    .filter( group =>
                        group.streets = group.streets.filter( street =>
                            this.postcode.includes( street.postcode )
                        ),
                    )
                    .filter( group =>
                        group.streets.length > 0
                    );
            },
        },

    }
</script>
