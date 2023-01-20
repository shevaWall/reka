@if(!$listItems->count())
    <div class="col-12 text-center h3">This task list hasn't any list items</div>
@else
    @foreach($listItems as $listItem)
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-1 my-auto text-center">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="completed" />
                </div>
                @if($listItem->file)
                    <div @class([
                        'col-md-3' => $listItem->file != '',
                        ])>
                        <img src="{{asset('/storage/'.$listItem->file)}}" class="img-fluid rounded-start" alt="{{$listItem->name}}">
                    </div>
                @endif
                <div @class([
                    'col-md-7' => $listItem->file != '',
                    'col-md-10' => $listItem->file == '',
                    ])>
                    <div class="card-body">
                        <h5 class="card-title">{{$listItem->name}}</h5>
                        <p class="card-text">{{$listItem->description}}</p>
                        <p class="card-text">
                            <small class="text-muted">Последнее обновление {{$listItem->updated_at}}</small>
                        </p>
                    </div>
                </div>
                <div class="col-md-1 actions my-auto">
                    <div class="row g-0">
                        <div class="btn-pencil pointer w-100"></div>
                        <div class="btn-close pointer w-100"></div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
