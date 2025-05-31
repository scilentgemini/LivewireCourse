<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
        @foreach ($users as $user)
        <h3>{{ $user->name }}</h3>
    @endforeach

    {{ $users->links() }}
</div>
