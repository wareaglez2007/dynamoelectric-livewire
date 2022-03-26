<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DynamicNavigation;

class NavigationMenu extends Component
{
    public $dynamicNavigations;

    

    public function render()
    {
        return view('livewire.navigation-menu');
    }

    public function mount()
    {
       $this->dynamicNavigations = DynamicNavigation::getLinks();
    }
}
