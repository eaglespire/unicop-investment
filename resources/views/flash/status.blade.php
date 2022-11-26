@include('flash.svg')

@if(session('success'))
    <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
        <button class="btn-close" type="button" data-bs-dismiss="alert"></button>
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
            <strong>
                {{ session('success') }}
            </strong>
        </div>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
        <button class="btn-close" type="button" data-bs-dismiss="alert"></button>
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Error:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            <strong>
                {{ session('error') }}
            </strong>
        </div>
    </div>
@endif


