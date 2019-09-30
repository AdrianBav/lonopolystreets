<template>
    <div>
        <site-header v-model="search" class="xl:flex-shrink-0"></site-header>

        <div class="xl:flex-1 xl:flex xl:overflow-y-hidden">
            <search-filters :postcodes=postcodes></search-filters>

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
                search: "",
            };
        },

        computed: {
            filteredGroups: function() {
                if ( this.search ) {
                    return this.groups.filter( group =>
                        group.name.toLowerCase().includes( this.search.toLowerCase() )
                    );
                }

                return this.groups;
            },
        },

    }
</script>
