<div class="form-group row">
    <div class="col-lg-6 col-12">
        <div class="mb-3">
            @error('name')
            <div class="text-danger"><strong>{{ $message }}</strong></div>
            @enderror
            <label class="form-label" for="name">Name</label>
            <input required wire:model.defer="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter name">
        </div>
    </div>
    <div class="col-lg-6 col-12">
        <div class="mb-3">
            @error('amount')
            <div class="text-danger"><strong>{{ $message }}</strong></div>
            @enderror
            <label class="form-label" for="amount">Amount</label>
            <input required wire:model.defer="amount" type="number" class="form-control @error('amount') is-invalid @enderror" id="amount" placeholder="Enter amount">
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-lg-6 col-12">
        <div class="mb-3">
            @error('interest')
            <div class="text-danger"><strong>{{ $message }}</strong></div>
            @enderror
            <label class="form-label" for="interest">Interest rate (in %)</label>
            <input required wire:model.defer="interest" type="number" class="form-control @error('interest') is-invalid @enderror" id="interest" placeholder="Enter interest rate (in %)">
        </div>
    </div>
    <div class="col-lg-6 col-12">
        <div class="mb-3">
            @error('duration')
            <div class="text-danger"><strong>{{ $message }}</strong></div>
            @enderror
            <label class="form-label" for="duration">Duration (in months)</label>
            <input required wire:model.defer="duration" type="number" class="form-control @error('duration') is-invalid @enderror" id="duration" placeholder="Enter duration (in months)">
        </div>
    </div>
</div>
