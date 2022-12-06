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

                <td>{{ ucfirst(auth()->user()->firstname) ?? null }}</td>
                <td style="width: 160px;"><span class="badge bg-soft-primary font-size-12">{{ ucfirst(auth()->user()->firstname[0] ?? null) }}</span></td>

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

                <td>{{ ucfirst(auth()->user()->lastname) ?? null }}</td>
                <td><span class="badge bg-soft-primary font-size-12">{{ ucfirst(auth()->user()->lastname[0] ?? null) }}</span></td>

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

                <td>{{ ucfirst(auth()->user()->middlename) ?? null }}</td>
                <td><span class="badge bg-soft-primary font-size-12">{{ ucfirst(auth()->user()->middlename[0] ?? null) }}</span></td>

            </tr>
            </tbody>
        </table>
    </div>
</div>
