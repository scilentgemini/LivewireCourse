<div>
    <h1>{{ $title }}</h1>
    {{ count($users) }}
    {{-- <button wire:click='handleClick'>
        Create New User
    </button> --}}
    <button wire:click='createNewUser'>
        Create New User
    </button>
</div>
