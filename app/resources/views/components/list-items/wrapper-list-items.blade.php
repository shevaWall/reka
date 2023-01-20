@if(!$listItems->count())
    <div class="col-12 text-center h3">This task list hasn't any list items</div>
@else
    @foreach($listItems as $listItem)
        @include('components.list-items.item')
    @endforeach
@endif
