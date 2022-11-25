<div wire:key="create-user-component">
    <button wire:click.prevent="submit" class="btn btn-primary">Send</button>
    <div class="row">
        <div class="col-lg-12">
            <div id="addproduct-accordion" class="custom-accordion">
                <div class="card">
                    <a href="#addproduct-billinginfo-collapse" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="add-new-user-info-collapse">
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
                                    <h5 class="font-size-16 mb-1">User Information</h5>
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
                                            <label class="form-label" for="productname">Email</label>
                                            <input wire:model.defer="email" type="email" class="form-control" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label" for="productname">Password</label>
                                            <input wire:model.defer="password" type="text" class="form-control" placeholder="Enter password">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label" for="productname">Phone Number</label>
                                            <input wire:model.defer="phone" type="text" class="form-control" placeholder="Enter phone">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label" for="">First Name</label>
                                            <input wire:model.defer="firstname" type="text" class="form-control" placeholder="Enter first name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label" for="">Last Name</label>
                                            <input wire:model.defer="lastname" type="text" class="form-control" placeholder="Enter last name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label" for="">Middle Name(optional)</label>
                                            <input wire:model.defer="middlename" type="text" class="form-control" placeholder="Enter middle name">
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
                                            02
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
                    </a>

                    <div id="addproduct-img-collapse" class="collapse" data-bs-parent="#addproduct-accordion">
                        <div class="p-4 border-top">
                            <form action="#" class="dropzone">
                                <div class="fallback">
                                    <input wire:model.defer="photo" type="file">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted uil uil-cloud-upload"></i>
                                    </div>

                                    <h4>Drop file here or click to upload.</h4>
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
                                            03
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
                    </a>

                    <div id="addproduct-metadata-collapse" class="collapse" data-bs-parent="#addproduct-accordion">
                        <div class="p-4 border-top">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="metatitle">Postal Code(optional)</label>
                                            <input wire:model.defer="postal" type="text" class="form-control" placeholder="Enter your Meta title">
                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="metakeywords">Street</label>
                                            <input wire:model.defer="street" type="text" class="form-control" placeholder="Enter street number">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label" for="metatitle">City</label>
                                            <input wire:model.defer="city" type="text" class="form-control" placeholder="Enter city">
                                        </div>

                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label" for="metakeywords">State</label>
                                            <input wire:model.defer="state" type="text" class="form-control" placeholder="Enter state">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label" for="metakeywords">Country</label>
                                            <input wire:model.defer="country" type="text" class="form-control" placeholder="Enter country">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row mb-4">
        <div class="col ms-auto">
            <div class="d-flex flex-reverse flex-wrap gap-2">
                <a href="#" class="btn btn-danger"> <i class="uil uil-times"></i> Cancel </a>
                <a wire:click.prevent="submit" href="#" class="btn btn-success"> <i class="uil uil-file-alt"></i> Save </a>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row-->
</div>
