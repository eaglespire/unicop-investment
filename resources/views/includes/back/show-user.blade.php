<div class="row mb-4">
    <div class="col-xl-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="text-center">
                    <div class="clearfix"></div>
                    <div>
                        @if($photo == null)
                            <img src="/back/assets/images/users/avatar-4.jpg" alt="" class="avatar-lg rounded-circle img-thumbnail">
                        @else
                            <img src="{{ \App\Helpers::getImageSrc($photo,'users/profile') }}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                        @endif

                    </div>
                    <h5 class="mt-3 mb-1">{{ ucfirst($firstname) }} {{ ucfirst($lastname) }} </h5>
                    <p class="text-muted">{{ '@'.$username }}</p>

                </div>
            </div>
        </div>
    </div>



    <div class="col-xl-8">
        <div class="card mb-0">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#about" role="tab">
                        <i class="uil uil-user-circle font-size-20"></i>
                        <span class="d-none d-sm-block">Personal Information</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tasks" role="tab">
                        <i class="uil uil-clipboard-notes font-size-20"></i>
                        <span class="d-none d-sm-block">Contact Information</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                        <i class="uil uil-envelope-alt font-size-20"></i>
                        <span class="d-none d-sm-block">Address</span>
                    </a>
                </li>
            </ul>
            <!-- Tab content -->
            <div class="tab-content p-4">
                <div class="tab-pane active" id="about" role="tabpanel">
                    <div>
                        <h5 class="font-size-16 mb-3">Personal Information</h5>

                        <div class="table-responsive">
                            <table class="table table-nowrap table-centered">
                                <tbody>
                                <tr>
                                    <td style="width: 60px;">
                                        <div class="form-check font-size-16 text-center">
                                            <input type="checkbox" class="form-check-input" id="tasks-activeCheck2">
                                            <label class="form-check-label" for="tasks-activeCheck2"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="fw-bold text-dark">Firstname</a>
                                    </td>

                                    <td>{{  $firstname }}</td>


                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16 text-center">
                                            <input type="checkbox" class="form-check-input" id="tasks-activeCheck1">
                                            <label class="form-check-label" for="tasks-activeCheck1"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="fw-bold text-dark">Lastname</a>
                                    </td>

                                    <td>{{ ucfirst($lastname) ?? null }}</td>


                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16 text-center">
                                            <input type="checkbox" class="form-check-input" id="tasks-activeCheck1">
                                            <label class="form-check-label" for="tasks-activeCheck1"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="fw-bold text-dark">Middlename</a>
                                    </td>

                                    <td>{{ ucfirst($middlename) ?? null }}</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="form-check font-size-16 text-center">
                                            <input type="checkbox" class="form-check-input" id="tasks-activeCheck1">
                                            <label class="form-check-label" for="tasks-activeCheck1"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="fw-bold text-dark">Password</a>
                                    </td>
                                    <td>{{ $password_text }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tasks" role="tabpanel">
                    <div>
                        <h5 class="font-size-16 mb-3">Contact</h5>

                        <div class="table-responsive">
                            <table class="table table-nowrap table-centered">
                                <tbody>
                                <tr>
                                    <td style="width: 60px;">
                                        <div class="form-check font-size-16 text-center">
                                            <input type="checkbox" class="form-check-input" id="tasks-activeCheck2">
                                            <label class="form-check-label" for="tasks-activeCheck2"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="fw-bold text-dark">Email</a>
                                    </td>

                                    <td>{{ $email ?? null }}</td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check font-size-16 text-center">
                                            <input type="checkbox" class="form-check-input" id="tasks-activeCheck1">
                                            <label class="form-check-label" for="tasks-activeCheck1"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="fw-bold text-dark">Mobile</a>
                                    </td>

                                    <td>{{ $phone ?? null }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="messages" role="tabpanel">
                    <h5 class="font-size-16 mb-3">Address</h5>

                    <div class="table-responsive">
                        <table class="table table-nowrap table-centered">
                            <tbody>
                            <tr>
                                <td style="width: 60px;">
                                    <div class="form-check font-size-16 text-center">
                                        <input type="checkbox" class="form-check-input" id="tasks-activeCheck1">
                                        <label class="form-check-label" for="tasks-activeCheck1"></label>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="fw-bold text-dark">Street</a>
                                </td>

                                <td>{{ ucfirst($street) ?? null }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16 text-center">
                                        <input type="checkbox" class="form-check-input" id="tasks-activeCheck1">
                                        <label class="form-check-label" for="tasks-activeCheck1"></label>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="fw-bold text-dark">City</a>
                                </td>

                                <td>{{ ucfirst($city) ?? null }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16 text-center">
                                        <input type="checkbox" class="form-check-input" id="tasks-activeCheck1">
                                        <label class="form-check-label" for="tasks-activeCheck1"></label>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="fw-bold text-dark">State</a>
                                </td>

                                <td>{{ ucfirst($state) ?? null }}</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16 text-center">
                                        <input type="checkbox" class="form-check-input" id="tasks-activeCheck1">
                                        <label class="form-check-label" for="tasks-activeCheck1"></label>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="fw-bold text-dark">Country</a>
                                </td>

                                <td>{{ ucfirst($country) ?? null }}</td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16 text-center">
                                        <input type="checkbox" class="form-check-input" id="tasks-activeCheck1">
                                        <label class="form-check-label" for="tasks-activeCheck1"></label>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="fw-bold text-dark">Postal</a>
                                </td>

                                <td>{{ ucfirst($postal) ?? null }}</td>


                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
<!-- end row -->
