<div class="card mb-3 shadow" id="listItem_{{$listItem->id}}">
    <div class="row g-0">
        <div class="col-md-1 my-auto text-center">
            <input class="form-check-input"
                   type="checkbox"
                   value="{{$listItem->completed}}" name="completed" onchange="listItemChangeState(this)"
                   @if($listItem->completed) checked="checked" @endif
            />
        </div>
        @if($listItem->file_preview)
            <div @class([
                        'col-md-2' => $listItem->file_preview != '',
                        ])>
                <a href="{{asset('/storage/'.$listItem->file)}}" target="_blank" class="listItem_a">
                    <img src="{{asset('/storage/'.$listItem->file_preview)}}" class="img-fluid rounded-start"
                         alt="{{$listItem->name}}">
                </a>
            </div>
        @endif
        <div @class([
                    'col-md-8' => $listItem->file_preview != '',
                    'col-md-10' => $listItem->file_preview == '',
                    ])>
            <div class="card-body">
                <h5 class="card-title">{{$listItem->name}}
                    @if($listItem->completed)
                        <span class="bg-success p-1 text-white">Completed</span>
                    @endif
                </h5>
                @if($listItem->tags)
                    <div class="tags-wrapper">
                            @foreach($listItem->tags as $tag)
                                <span class="badge bg-secondary" id="tag_{{$tag->id}}">{{$tag->name}}</span>
                            @endforeach
                    </div>
                @endif
                <p class="card-text card-description">{{$listItem->description}}</p>
                <p class="card-text">
                    <small class="text-muted">Последнее обновление {{$listItem->updated_at}}</small>
                </p>
            </div>
        </div>
        <div class="col-md-1 actions my-auto">
            <div class="row g-0">
                <div class="spinner d-none text-center">
                    <x-spinner.danger/>
                </div>
                <div class="btn-pencil pointer w-100"
                     data-bs-toggle="modal"
                     data-bs-target="#editListItem"
                     onclick="showEditListItemForm(this, {{$listItem->id}})"></div>
                <div class="btn-close pointer w-100"
                     onclick="deleteListItem(this, {{$listItem->id}})"></div>
            </div>
        </div>
    </div>
</div>
