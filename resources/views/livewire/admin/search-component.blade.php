<div wire:key="admin.search-component">
    <form class="app-search d-none d-lg-block" wire:key="search-component">
        <div class="position-relative">
            <input wire:model="term" type="text" class="form-control" placeholder="Search...">
            <span class="uil-search"></span>
        </div>
        <div wire:loading><p class="text-primary">Please wait...</p></div>
    </form>



{{--    @if ($term == "")--}}
{{--    @else--}}
{{--        @if(!empty($users))--}}
{{--            @if($users->isEmpty())--}}
{{--                <div class="text-gray-500 text-sm">--}}
{{--                    No matching result was found.--}}
{{--                </div>--}}
{{--            @else--}}
{{--                @foreach($users as $user)--}}
{{--                    <div>--}}
{{--                        <h3 class="text-lg text-gray-900 text-bold">{{$user->firstname}}</h3>--}}
{{--                        <p class="text-gray-500 text-sm">{{$user->email}}</p>--}}
{{--                        <p class="text-gray-500">{{$user->lastname}}</p>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endif--}}
{{--        @endif--}}
{{--    @endif--}}

</div>
