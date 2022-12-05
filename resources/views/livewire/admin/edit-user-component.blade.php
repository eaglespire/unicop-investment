<div wire:key="edit-user-component">
    <div id="addproduct-accordion" class="custom-accordion">
        @include('flash.status')
        <div class="card">
            <a href="#addproduct-billinginfo-collapse" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="addproduct-billinginfo-collapse">
                <div class="p-4">

                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-xs">
                                <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                    01
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1 overflow-hidden">
                            <h5 class="font-size-16 mb-1">Personal Information</h5>
                            <p class="text-muted text-truncate mb-0">Fill all information below</p>
                        </div>
                        <div class="flex-shrink-0">
                            <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                        </div>

                    </div>

                </div>
            </a>

            <div id="addproduct-billinginfo-collapse" class="collapse show" data-bs-parent="#addproduct-accordion">
                <div class="p-4 border-top">
                    <form>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label" for="manufacturername">FirstName</label>
                                    @error('firstname')
                                        <div class="text-danger"><strong>{{ $message }}</strong></div>
                                    @enderror
                                    <input wire:model.defer="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" placeholder="Enter firstname">
                                </div>
                            </div>
                            <div class="col-lg-4">

                                <div class="mb-3">
                                    <label class="form-label" for="manufacturerbrand">Middle Name</label>
                                    @error('middlename')
                                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                                    @enderror
                                    <input wire:model.defer="middlename" type="text" class="form-control @error('middlename') is-invalid @enderror" placeholder="Enter lastname">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label" for="price">Last Name</label>
                                    @error('lastname')
                                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                                    @enderror
                                    <input wire:model.defer="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" placeholder="Enter your Price">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="manufacturername">Password</label>
                                    @error('password_text')
                                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                                    @enderror
                                    <input wire:model.defer="password_text" type="text" class="form-control @error('password_text') is-invalid @enderror" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="mb-3">
                                    <label class="form-label" for="manufacturerbrand">Phone</label>
                                    @error('phone')
                                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                                    @enderror
                                    <input wire:model.defer="phone" type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter phone">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>



        <div class="card">
            <a href="#addproduct-metadata-collapse" class="text-dark collapsed" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-haspopup="true" aria-controls="addproduct-metadata-collapse">
                <div class="p-4">

                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-xs">
                                <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                    02
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1 overflow-hidden">
                            <h5 class="font-size-16 mb-1">Address Information</h5>
                            <p class="text-muted text-truncate mb-0">Fill all information below</p>
                        </div>
                        <div class="flex-shrink-0">
                            <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                        </div>

                    </div>

                </div>
            </a>

            <div id="addproduct-metadata-collapse" class="collapse show" data-bs-parent="#addproduct-accordion">
                <div class="p-4 border-top">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="metatitle">Street</label>
                                    @error('street')
                                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                                    @enderror
                                    <input wire:model.defer="street" type="text" class="form-control @error('street') is-invalid @enderror" placeholder="Enter street name">
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="metakeywords">Postal Code</label>
                                    @error('postal')
                                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                                    @enderror
                                    <input wire:model.defer="postal" type="text" class="form-control @error('postal') is-invalid @enderror" placeholder="Enter postal code">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label" for="metatitle">City</label>
                                    @error('city')
                                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                                    @enderror
                                    <input wire:model.defer="city" type="text" class="form-control @error('city') is-invalid @enderror" placeholder="Enter city">
                                </div>

                            </div>

                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label" for="metakeywords">State</label>
                                    @error('state')
                                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                                    @enderror
                                    <input wire:model.defer="state" type="text" class="form-control @error('state') is-invalid @enderror" placeholder="Enter state">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label" for="metakeywords">Country</label>
                                    @error('country')
                                    <div class="text-danger"><strong>{{ $message }}</strong></div>
                                    @enderror
                                    <input wire:model.defer="country" type="text" class="form-control @error('country') is-invalid @enderror" placeholder="Enter country">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>



    <div class="row mb-4">
        <div class="col ms-auto">
            <div class="d-flex flex-reverse flex-wrap gap-2">
                <a wire:click.prevent="cancel" href="#" class="btn btn-danger"> <i class="uil uil-arrow-left"></i> Go Back </a>
                <a wire:click.prevent="submit" href="#" class="btn btn-success"> <i class="uil uil-file-alt"></i> Save </a>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row-->

    <div class="card">
        <a href="#addproduct-img-collapse" class="text-dark collapsed" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-haspopup="true" aria-controls="addproduct-img-collapse">
            <div class="p-4">

                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-3">
                        <div class="avatar-xs">
                            <div class="avatar-title rounded-circle bg-soft-primary text-primary">
                                03
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <h5 class="font-size-16 mb-1">Profile Photo</h5>
                        <p class="text-muted text-truncate mb-0">Update profile photo</p>
                    </div>
                    <div class="flex-shrink-0">
                        <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                    </div>

                </div>

            </div>
        </a>

        <div id="addproduct-img-collapse" class="collapse show" data-bs-parent="#addproduct-accordion">
            <div class="p-4 border-top">
                <img style="width: 200px; height: 100px; object-position: center center; object-fit: cover; margin-top: 20px; margin-bottom: 20px;" src="{{ \App\Helpers::getImageSrc($photo,'users/profile') }}" alt="" class="img-fluid">
                <form action="#" class="dropzone">
                    <div class="fallback">
                        <input id="{{ $counter }}" wire:model.defer="photo" type="file">
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
                                <a wire:click.prevent="uploadImage" href="#" class="btn btn-success"> <i class="uil uil-file-alt"></i> Upload </a>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </form>
            </div>
        </div>
    </div>

</div>
