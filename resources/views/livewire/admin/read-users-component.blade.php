<div wire:key="read-users-component">
    <div class="row">
        <div class="col-12">
            <a data-toggle="modal" data-target="#newUserModal" href="#" class="btn btn-primary float-right my-2" >
                <i class="uil uil-user-plus"></i> new user
            </a>
        </div>
        @if($users->isNotEmpty())
            @foreach($users as $user)
                <div class="col-xl-3 col-lg-4 col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="badge badge-success float-right">Active</div>
                            <p class="text-success text-uppercase font-size-12 mb-2">{{ '@'.auth()->user()->username }}</p>
                            <h5><a href="#" class="text-dark">{{ \App\Helpers::buildFullName(auth()->id()) }}</a></h5>
                            <p class="text-muted mb-4"></p>

                            <div>
                                <a href="javascript: void(0);">
                                    <img src="/assets/images/users/avatar-2.jpg" alt="" class="avatar-sm m-1 rounded-circle">
                                </a>

                            </div>
                        </div>
                        <div class="card-body border-top">
                            <div class="row align-items-center">
                                <div class="col-sm-auto">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item pr-2">
                                            <a href="#" class="text-muted d-inline-block"
                                               data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Edit Profile">
                                                <i class="uil uil-edit-alt mr-1"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item pr-2">
                                            <a href="#" class="text-muted d-inline-block"
                                               data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Delete">
                                                <i class="uil uil-trash-alt mr-1"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted d-inline-block"
                                               data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Ban user">
                                                <i class="uil uil-ban mr-1"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted d-inline-block"
                                               data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Message User">
                                                <i class="uil uil-message mr-1"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            @endforeach
        @endif
    </div>
    <!-- end row -->

    @if($hasMorePages)
        <div class="row mb-3 mt-2">
            <div class="col-12">
                <div wire:loading.block class="text-center">
                    <p class="text-primary">loading...</p>
                </div>
                <div class="text-center">
                    <a wire:click.prevent="loadUsers" href="javascript:void(0);" class="btn btn-white">
                        <i data-feather="loader" class="icon-dual icon-xs mr-2"></i>
                        Load more
                    </a>
                </div>
            </div> <!-- end col-->
        </div>
    @endif

    <!-- end row -->






    <!-- Modal -->
    <div class="modal fade" id="newUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>


