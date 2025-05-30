<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Clicker extends Component
{

    use WithPagination;
    // public function handleClick(){
    //     dump("clicked");
    // }

    #[Rule('required|min:2|max:50')]
    public $name;

    #[Rule('required|email|unique:users')]
    public $email;

    #[Rule('required|min:2')]
    public $password;


    public function createNewUser(){

        $this->validate();

        User::create([
            "name" => $this->name,
            "email" => $this->email,
            "password" => $this->password,
        ]);

        $this->reset(['name', 'email', 'password']);

        request()->session()->flash('success', 'User Created Successfully!');
    }

    public function render()
    {

        // $users = User::all();
        $users = User::paginate(3);
        
        return view('livewire.clicker', [
            "users" => $users,
        ]);
    }
}
