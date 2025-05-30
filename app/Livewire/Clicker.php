<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class Clicker extends Component
{

    use WithPagination;
    use WithFileUploads;
    // public function handleClick(){
    //     dump("clicked");
    // }

    #[Rule('required|min:2|max:50')]
    public $name;

    #[Rule('required|email|unique:users')]
    public $email;

    #[Rule('required|min:2')]
    public $password;

    #[Rule('nullable|sometimes|image|max:1024')]
    public $image;


    public function createNewUser(){

        $validated = $this->validate();

        if($this->image){
            $validated['image'] = $this->image->store('uploads', 'public');
        }

        User::create($validated);

        $this->reset(['name', 'email', 'password', 'image']);

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
