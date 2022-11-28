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
                                    <input wire:model.defer="firstname" type="text" class="form-control" placeholder="Enter your Manufacturer Name">
                                </div>
                            </div>
                            <div class="col-lg-4">

                                <div class="mb-3">
                                    <label class="form-label" for="manufacturerbrand">Middle Name</label>
                                    <input wire:model.defer="middlename" type="text" class="form-control" placeholder="Enter your Manufacturer Brand">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label" for="price">Last Name</label>
                                    <input wire:model.defer="lastname" type="text" class="form-control" placeholder="Enter your Price">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="manufacturername">Password</label>
                                    <input wire:model.defer="password_text" type="text" class="form-control" placeholder="Enter your Manufacturer Name">
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="mb-3">
                                    <label class="form-label" for="manufacturerbrand">Phone</label>
                                    <input wire:model.defer="phone" type="text" class="form-control" placeholder="Enter your Manufacturer Brand">
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
                                    <input wire:model.defer="street" type="text" class="form-control" placeholder="Enter your Meta title">
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="metakeywords">Postal Code</label>
                                    <input wire:model.defer="postal" type="text" class="form-control" placeholder="Enter your Meta Keywords">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label" for="metatitle">City</label>
                                    <input wire:model.defer="city" type="text" class="form-control" placeholder="Enter your Meta title">
                                </div>

                            </div>

                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label" for="metakeywords">State</label>
                                    <input wire:model.defer="state" type="text" class="form-control" placeholder="Enter your Meta Keywords">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="form-label" for="metakeywords">Country</label>
                                    <input wire:model.defer="country" type="text" class="form-control" placeholder="Enter your Meta Keywords">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

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



    <div class="row mb-4">
        <div class="col ms-auto">
            <div class="d-flex flex-reverse flex-wrap gap-2">
                <a wire:click.prevent="cancel" href="#" class="btn btn-danger"> <i class="uil uil-arrow-left"></i> Go Back </a>
                <a wire:click.prevent="submit" href="#" class="btn btn-success"> <i class="uil uil-file-alt"></i> Save </a>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row-->

</div>
