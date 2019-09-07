<?php

namespace App\Http\Livewire;

use App\Group;
use App\Street;
use Livewire\Component;

class Foo extends Component
{
    //
    public $search;
    protected $postcodes;
    protected $groups;

    //
    public function mount()
    {
        $this->postcodes = Street::whereNotNull('postcode')
            ->orderBy('postcode')
            ->distinct()
            ->pluck('postcode');
    }

    //
    public function render()
    {
        $this->groups = Group::with('streets')
            ->when($this->search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%");
            })
            ->get();

        return view('livewire.foo', [
            'postcodes' => $this->postcodes,
            'groups' => $this->groups,
        ]);
    }
}
