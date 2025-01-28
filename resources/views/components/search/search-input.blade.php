<div>
    <form action="/search/query" method="GET">

        <div class="flex flex-row w-full gap-2">
            <div class="flex-none input-group max-w-md">
                <input class="input" placeholder="Search" name="query" required
                    value={{ isset($query) ? $query : '' }} />

                <select class="select input-group-text w-1/3 max-sm:w-3/5" aria-label="select" name="type">
                    <option disabled selected>Filter</option>
                    @foreach ($searchFilters as $searchFilter)

                        <option value="{{ $searchFilter['value'] }}" @selected($searchFilter['value'] == $type)>
                            {{ $searchFilter['option'] }}
                        </option>
                    @endforeach

                </select>
            </div>

            <button class="flex-none btn btn-outline btn-secondary join-item" type="submit">Search</button>


        </div>
    </form>
</div>
