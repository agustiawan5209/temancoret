<?php

namespace App\View\Components;

use App\Models\Team;
use Illuminate\View\Component;

class produkcarousel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $team = Team::all();
        return view('components.produkcarousel', compact('team'));
    }
}
