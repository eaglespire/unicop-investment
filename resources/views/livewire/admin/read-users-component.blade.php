<div wire:key="read-users-components">
    <div wire:loading.block wire:target="deleteUser,banUser,activateUser">
        @include('flash.processing')
    </div>
    @include('flash.status')
    <div class="row align-items-center">
        <div class="col-lg-4">
            <a class="btn btn-primary" href="{{ route('admin.create-new-user') }}">
                <span class="uil uil-plus-square"></span> new user
            </a>
        </div>
        <div class="col-lg-6 offset-lg-2">
            <form class="app-search d-lg-block">
                <div class="position-relative">
                    <input wire:model="term" type="text" class="form-control " placeholder="Search for a user...">
                    <span class="uil-search"></span>
                </div>
                <div wire:loading><p class="text-primary">Please wait...</p></div>
            </form>
        </div>
    </div>
        <div class="row">
            @if(count($users) != 0)
                @forelse($users as $user)
                    <div class="col-xl-3 col-sm-6" wire:key="{{ $user['id'] }}">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="float-start">
                                    @if($user->banned_until)
                                        <span class="text-danger">Suspended</span>
                                    @else
                                        <span class="text-success">Active</span>
                                    @endif
                                </div>
                                <div class="dropdown float-end">
                                    <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                        <i class="uil uil-ellipsis-h"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item waves-effect waves-light" href="{{ route('admin.edit-user-component', ['id'=>$user['id']]) }}">Edit</a>
                                        @if($user->banned_until)
                                            <a wire:click.prevent="activateUser({{ $user['id'] }})" class="dropdown-item" href="#">Activate User</a>
                                        @else
                                            <a wire:click.prevent="banUser({{ $user['id'] }})" class="dropdown-item" href="#">Suspend User</a>
                                        @endif
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
                                <a href="{{ route('admin.offer-loan-component', ['_id'=>$user['id']]) }}" type="button" class="btn btn-outline-light text-truncate"><i class="uil uil-envelope-alt me-1"></i> Give Loan</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <h6>No record found...</h6>
                @endforelse
                {{ $users->links() }}
            @endif
        </div>
        <!-- end row -->








    <!-- Include livewire create new user modal here -->
{{--    <livewire:modals.create-new-user-modal/>--}}

    <!-- Profile show staticBackdrop Modal example -->
    <div class="modal fade" id="userBackdropModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="userBackdropModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userBackdropModalLabel">{{ ucfirst($firstname) }} {{ ucfirst($lastname) }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    @include('includes.back.show-user')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
{{--                    <button type="button" class="btn btn-primary">Understood</button>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- END OF STATIC BACKDROP MODAL -->


    @push('scripts')
        <script>
            window.addEventListener('load-modal', event=>{
                $('#userBackdropModal').modal('show')
            })
        </script>
    @endpush
</div>


