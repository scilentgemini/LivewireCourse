<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{

    // public function handleClick(){
    //     dump("clicked");
    // }
    public function createNewUser(){
        User::create([
            "name" => "Test User",
            "email" => "test@test.com",
            "password" => "password",
        ]);
    }

    public function render()
    {

        $title = "Title";

        $users = User::all();
        
        return view('livewire.clicker', [
            "title" => $title,
            "users" => $users,
        ]);
    }
}
