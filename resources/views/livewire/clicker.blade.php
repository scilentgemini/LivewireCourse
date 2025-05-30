<div>
    {{-- <h1>{{ $title }}</h1>
    {{ count($users) }} --}}
    {{-- <button wire:click='handleClick'>
        Create New User
    </button> --}}
    {{-- <button wire:click='createNewUser'>
        Create New User
    </button> --}}
    @if (session('success'))
        <span class="px-3 py-3 bg-green-600 text-white rounded">{{ session('success') }}</span>
    @endif
    <form wire:submit='createNewUser' action="">
        <input class="block rounded border border-gray-100 px-3 py-1 mt-2" wire:model="name" type="text" placeholder="Name">
        @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <input class="block rounded border border-gray-100 px-3 py-1 mt-2" wire:model="email" type="text" placeholder="Email">
        @error('email')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <input class="block rounded border border-gray-100 px-3 py-1 mt-2" wire:model="password" type="password" placeholder="Password">
        @error('password')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <input class="block rounded border border-gray-500 px-3 py-1 mt-2" wire:model='image' type="file" id="image" accept="image/png, image/jpeg">
        @error('image')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        @if ($image)
            <image class="rounded w-10 h-10 mt-5" src="{{ $image->temporaryUrl() }}" />
        @endif

        <div wire:loading wire:target='image'>
            <span class="text-green-500">Uploading...</span>
        </div>

        <button class="block rounded px-3 py-1 bg-gray-400 text-white">Create</button>


    </form>

    <hr>

    @foreach ($users as $user)
        <h3>{{ $user->name }}</h3>
    @endforeach

    {{ $users->links() }}

</div>
