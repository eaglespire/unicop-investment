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
                <td style="width: 160px;"><span class="badge bg-soft-primary font-size-12">{{ ucfirst(auth()->user()->email[0] ?? null) }}</span></td>

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
                <td><span class="badge bg-soft-primary font-size-12">{{ auth()->user()->phone[0] ?? null }}</span></td>
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
                <td style="width: 160px;"><span class="badge bg-soft-primary font-size-12">{{ ucfirst(auth()->user()->street[0] ?? null) }}</span></td>

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
                <td><span class="badge bg-soft-primary font-size-12">{{ ucfirst(auth()->user()->city[0] ?? null) }}</span></td>

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
                <td><span class="badge bg-soft-primary font-size-12">{{ ucfirst(auth()->user()->state[0] ?? null) }}</span></td>

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
                <td><span class="badge bg-soft-primary font-size-12">{{ ucfirst(auth()->user()->country[0] ?? null) }}</span></td>

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
                <td><span class="badge bg-soft-primary font-size-12">{{ ucfirst(auth()->user()->postal[0] ?? null) }}</span></td>

            </tr>
            </tbody>
        </table>
    </div>
</div>

