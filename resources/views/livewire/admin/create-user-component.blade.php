<div wire:key="create-user-component">
    @include('flash.status')
    <div wire:loading.block wire:target="levelOne,levelTwo,levelThree">@include('flash.processing')</div>
    <div class="row">
        <div class="col-lg-12">
            @if($step == 1)
                <div class="card">
                    <div class="p-4">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                        1/3
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="font-size-16 mb-1">User Information</h5>
                                <p class="text-muted text-truncate mb-0">Fill all information below</p>
                            </div>
                            <div class="flex-shrink-0">
                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                            </div>

                        </div>

                    </div>
                    <div class="p-4 border-top">
                        <form>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="productname">Email</label>
                                        <input wire:model.defer="email" type="email" class="form-control" placeholder="Enter email">
                                        @error('email')
                                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="productname">Password</label>
                                        <input wire:model.defer="password" type="password" class="form-control" placeholder="Enter password">
                                        @error('password')
                                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="productname">Phone Number</label>
                                        <input wire:model.defer="phone" type="text" class="form-control" placeholder="Enter phone">
                                        @error('phone')
                                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="">First Name</label>
                                        <input wire:model.defer="firstname" type="text" class="form-control" placeholder="Enter first name">
                                        @error('firstname')
                                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="">Last Name</label>
                                        <input wire:model.defer="lastname" type="text" class="form-control" placeholder="Enter last name">
                                        @error('lastname')
                                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="">Middle Name(optional)</label>
                                        <input wire:model.defer="middlename" type="text" class="form-control" placeholder="Enter middle name">
                                        @error('middlename')
                                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col ms-auto">
                                    <div class="d-flex flex-reverse flex-wrap gap-2">
                                        <a href="#" class="btn btn-danger"> <i class="uil uil-times"></i> Cancel </a>
                                        <a wire:click.prevent="levelOne" href="#" class="btn btn-success"> <i class="uil uil-file-alt"></i> Save </a>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                        </form>
                    </div>
                </div>
            @elseif($step == 2)
                <div class="card">
                    <div class="p-4">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                        2/3
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="font-size-16 mb-1">Profile Image</h5>
                                <p class="text-muted text-truncate mb-0">Upload Profile Picture</p>
                            </div>
                            <div class="flex-shrink-0">
                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                            </div>

                        </div>

                    </div>
                    <div class="p-4 border-top">
                        <form action="#" class="dropzone">
                            <div class="fallback">
                                <input wire:model.defer="photo" type="file">
                                @error('photo')
                                <span class="text-danger"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted uil uil-cloud-upload"></i>
                                </div>

                                <h4>Drop file here or click to upload.</h4>
                            </div>
                            <div class="row mb-4">
                                <div class="col ms-auto">
                                    <div class="d-flex flex-reverse flex-wrap gap-2">
                                        <a href="#" class="btn btn-danger"> <i class="uil uil-times"></i> Cancel </a>
                                        <a wire:click.prevent="levelTwo" href="#" class="btn btn-success"> <i class="uil uil-file-alt"></i> Save </a>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                        </form>
                    </div>
                </div>
            @elseif($step == 3)
                <div class="card">
                    <div class="p-4">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                        3/3
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="font-size-16 mb-1">Address Information</h5>
                                <p class="text-muted text-truncate mb-0">Fill the information below</p>
                            </div>
                            <div class="flex-shrink-0">
                                <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                            </div>

                        </div>
                    </div>
                    <div class="p-4 border-top">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="metatitle">Postal Code(optional)</label>
                                        <input id="{{ $counter }}" wire:model.defer="postal" type="text" class="form-control" placeholder="Enter zip code">
                                        @error('postal')
                                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="metakeywords">Street</label>
                                        <input wire:model.defer="street" type="text" class="form-control" placeholder="Enter street number">
                                        @error('street')
                                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="metatitle">City</label>
                                        <input wire:model.defer="city" type="text" class="form-control" placeholder="Enter city">
                                        @error('city')
                                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="metakeywords">State</label>
                                        <input wire:model.defer="state" type="text" class="form-control" placeholder="Enter state">
                                        @error('state')
                                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="metakeywords">Country</label>
                                        <input wire:model.defer="country" type="text" class="form-control" placeholder="Enter country">
                                        @error('country')
                                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col ms-auto">
                                    <div class="d-flex flex-reverse flex-wrap gap-2">
                                        <a href="#" class="btn btn-danger"> <i class="uil uil-times"></i> Cancel </a>
                                        <a wire:click.prevent="levelThree" href="#" class="btn btn-success"> <i class="uil uil-file-alt"></i> Save </a>
{{--                                        <button wire:click.prevent="prevStep" class="btn btn-danger"> <i class="uil uil-arrow-left"></i> Prev </button>--}}
                                    </div>
                                </div> <!-- end col -->
                            </div>
                        </form>
                    </div>
                </div>
            @endif

        </div>
    </div>
    <!-- end row -->

    <!-- end row-->
</div>













