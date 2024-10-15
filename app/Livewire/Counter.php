<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 0;

    public $number = 1;

    public $result = 0;

    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }

    public function incrementByNumber($number)
    {
        $this->result += $number;
    }

    public function decrementByNumber($number)
    {
        $this->result -= $number;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
