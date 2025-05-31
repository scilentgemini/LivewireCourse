<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersList extends Component
{

    use WithPagination;

    public function render()
    {
        return view('livewire.users-list', [
            'users' => User::latest()->paginate(3)
        ]);
    }
}
