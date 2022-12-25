<div>
    <div class="card">
        <div class="card-header">
            {{__('List of Users')}}
        </div>
        <div class="card-body" style="height: 500px; overflow: auto">
            <ul class="list-group">
                @foreach($users as $user)
                    <li class="list-group-item col-12 d-flex align-items-center" style="cursor:pointer" wire:click="$emit('set-user',{{$user}})">
                        <div class="text-start col-1">
                            <img src="{{$user->profile_photo_path}}" class="rounded-circle" alt="">
                        </div>
                        <div class="col-1"></div>
                        <div class="text-end col-10">
                            <label class="text-muted text-end">{{$user->name}}</label>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>