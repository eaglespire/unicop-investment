<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $user->fullname }} investments</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr class="table-primary">
                            <th scope="col">Package</th>
                            <th scope="col">Min. Amount</th>
                            <th scope="col">Amount Invested</th>
                            <th scope="col">Roi</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Date Started</th>
                            <th scope="col">Maturity Date</th>
                            <th scope="col">Expected Return</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">{{ $investment->investmentPackage->name }}</th>
                            <td>$ {{ number_format($investment->investmentPackage->amount,2) }} </td>
                            <td>$ {{ number_format($investment->amount,2) }} </td>
                            <td>{{ $investment->investmentPackage->roi }} %</td>
                            <td>{{ $investment->investmentPackage->duration }} month(s)</td>
                            <td>{{ $investment->start_date->toFormattedDateString() }} </td>
                            <td>{{ $investment->end_date->toFormattedDateString() }} </td>
                            <td>$ {{ number_format($investment->expectedReturn(),2) }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <h2>User Uploaded Document</h2>
                <img src="https://cdn.pixabay.com/photo/2013/07/21/13/00/rose-165819_960_720.jpg" alt="" class="img-fluid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
