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

                <td>{{ auth()->user()->email ?? null }}</td>
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

                <td>{{ auth()->user()->phone ?? null }}</td>
            </tr>
            </tbody>
        </table>
    </div>

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

                <td>{{ ucfirst(auth()->user()->street) ?? null }}</td>
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

                <td>{{ ucfirst(auth()->user()->city) ?? null }}</td>
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

                <td>{{ ucfirst(auth()->user()->state) ?? null }}</td>
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

                <td>{{ ucfirst(auth()->user()->country) ?? null }}</td>
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

                <td>{{ ucfirst(auth()->user()->postal) ?? null }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

