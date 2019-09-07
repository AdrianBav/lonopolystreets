<div>
    <site-header wire:model="search" class="xl:flex-shrink-0"></site-header>

    <div class="xl:flex-1 xl:flex xl:overflow-y-hidden">
        <search-filters :postcodes='@json($postcodes)'></search-filters>

        <main class="py-6 xl:flex-1 xl:overflow-x-hidden">
            {{ $search }}

            <deck :groups='@json($groups)'></deck>
        </main>

        <copyright class="xl:hidden"></copyright>
    </div>
</div>
