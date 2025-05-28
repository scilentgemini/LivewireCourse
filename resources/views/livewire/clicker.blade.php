<div>
    {{-- <h1>{{ $title }}</h1>
    {{ count($users) }} --}}
    {{-- <button wire:click='handleClick'>
        Create New User
    </button> --}}
    {{-- <button wire:click='createNewUser'>
        Create New User
    </button> --}}
    <form wire:submit='createNewUser' action="">
        <input wire:model="name" type="text" placeholder="Name">
        <input wire:model="email" type="text" placeholder="Email">
        <input wire:model="password" type="password" placeholder="Password">
        <button>Create</button>
    </form>

    <hr>

    @foreach ($users as $user)
        <h3>{{ $user->name }}</h3>
    @endforeach

</div>
