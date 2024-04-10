<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;
    public bool $disable = true;
    public function increment(): void
    {
        $this->count++;
    }

    public function decrement(): void
    {
        $this->count--;
        if ($this->count <= 0) {
            $this->count = 0;
        }
    }

    // continue plus tard
    public function disable() :void {
        if ($this->count > 0) {
            $this->disable = false;
        }
    }

    public $username = "TEST USER";

    public function render()
    {
        $title = 'test';
        $users = User::all();

        return view('livewire.counter', [
            'title' => $title,
            'users' => $users,
        ]);
    }

    public function createNewUser()
    {
        User::create([
            'name' => 'Johnss Doe',
            'email' => 'dss@gmail.com',
            'password' => 'password',
        ]);
    }
}
