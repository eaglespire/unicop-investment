<div class="row">
    @if(count($data['data']) != 0)
        @foreach($data['data'] as $user)
            <div class="col-xl-3 col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                <i class="uil uil-ellipsis-h"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item waves-effect waves-light" href="{{ route('admin.edit-user-component', ['id'=>$user['id']]) }}">Edit</a>
                                <a class="dropdown-item" href="#">Action</a>
                                <a wire:click.prevent="deleteUser({{ $user['id'] }})" class="dropdown-item" href="#">Remove</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="mb-4">
                            <img style="object-fit: cover; object-position: center" src="{{ \App\Helpers::getImageSrc($user['photo'],'users/profile') }}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                        </div>
                        <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">{{ ucfirst($user['firstname']) }} {{ ucfirst($user['lastname']) }}</a></h5>
                        <p class="text-muted mb-2"> {{ '@'.$user['username'] }}</p>

                    </div>

                    <div class="btn-group" role="group">
                        <button wire:click.prevent="loadUser({{ $user['id'] }})" type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-user me-1"></i> Profile</button>
                        <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-envelope-alt me-1"></i> Message</button>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
