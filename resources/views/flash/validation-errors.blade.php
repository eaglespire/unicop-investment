@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item">
                    <strong>{{ $error }}</strong>
                </li>
            @endforeach
        </ul>
    </div>
@endif
