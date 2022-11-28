<div>
    <form class="p-3">
        <div wire:loading wire:target="search">Please wait...</div>
        <div class="m-0">
            <div class="input-group">
                <input wire:model="term" type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                <div class="input-group-append">
                    <button wire:click.prevent="search" class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                </div>
            </div>
        </div>
    </form>

</div>
