<div>
    <div class="card">
        <div class="card-header">
            <div class="text-center">
                <img src="{{$user->profile_photo_path}}" class="rounded-circle" alt="...">
            </div>
            <div class="text-center">
                <label class="text-muted">{{$user->name}}<label><i class="bi bi-circle-fill text-success"></i></label></label>
            </div>
        </div>
        <div class="card-body">
            <div style="height: 500px; overflow: auto" id="messages-box">
                @empty(!$messages)
                @foreach($messages as $message)
                <ul>
                    @if($message->from_id == auth()->user()->id)
                    <li class="repaly">
                        <p> {{$message->message}} </p>
                        <span class="time">{{ $message->created_at->format('g:i a')  }}</span>
                    </li>
                    @else
                    <li class="sender">
                        <p>{{$message->message}}</p>
                        <span class="time">{{ $message->created_at->format('g:i a')  }}</span>
                    </li>
                    @endif
                </ul>
                @endforeach
                @endempty
            </div>
            <div class="form-floating">
                <textarea rows="4" wire:model.lazy='message' cols="50" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary" wire:click='send()'>Send</button>
        </div>
    </div>
</div>