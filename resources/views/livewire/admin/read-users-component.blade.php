<div wire:key="read-users-component">
    <div class="row">
        @if(count($users) != 0)
            @foreach($users as $user)
                <div class="col-xl-3 col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                    <i class="uil uil-ellipsis-h"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Remove</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="mb-4">
                                <img style="object-fit: cover; object-position: center" src="{{ isset($user['photo']) ? asset("storage/users/profile/".$user['photo']) : asset('back/assets/images/users/blank-profile-picture-973460.svg') }}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                            </div>
                            <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">{{ ucfirst($user['firstname']) }} {{ ucfirst($user['firstname']) }}</a></h5>
                            <p class="text-muted mb-2"> {{ '@'.$user['username'] }}</p>

                        </div>

                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-user me-1"></i> Profile</button>
                            <button type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-envelope-alt me-1"></i> Message</button>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

    </div>
    <!-- end row -->

    @if($hasMorePages)
        <div class="row mt-3">
            <div class="col-xl-12">
                <div class="text-center my-3">
                    <a wire:click.prevent="loadUsers" href="javascript:void(0);" class="text-primary"><i class="mdi mdi-loading mdi-spin font-size-20 align-middle me-2"></i> Load more </a>
                </div>
            </div>
        </div>
        <!-- end row -->
    @endif
</div>
