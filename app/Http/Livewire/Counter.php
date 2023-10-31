<?php

namespace App\Http\Livewire;

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

    public function render()
    {
        return view('livewire.counter');
    }
}
