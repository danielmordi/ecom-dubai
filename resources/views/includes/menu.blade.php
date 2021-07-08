<div class="row">
    <div class="procats">
        <span data-filter="all" class="active border-bottom box-shadow filter-button">All</span>

        @foreach ($categories as $cat)
        <span data-filter="{{ $cat->slug }}" class="border-bottom box-shadow filter-button">
        {{ $cat->name }}
        </span>
        @endforeach

    </div>
</div>
