<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Demo extends Component
{
    public $name;
    protected $other;

    public function render()
    {
        $this->other = sprintf('Xx%sxX', $this->name);

        return view('livewire.demo', [
            'other' => $this->other,
        ]);
    }
}
