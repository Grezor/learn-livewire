<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Validate;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;


class Form extends Component
{
    use WithPagination;
    public $name = '';
    public $email = '';
    public $password = '';

    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.form', [
            'users' => $users
        ]);
    }

    public function createNewUser()
    {
          $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5'
          ]);
 
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);
        $this->reset(['name', 'email', 'password']);

        request()->session()->flash('success', 'User created successfully.');
    }
}
