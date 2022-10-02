<?php

namespace App\View\Components;

use App\Models\Produk;
use Illuminate\View\Component;

class produklist extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $reqData;
    public function __construct($reqData)
    {
        $this->reqData = $reqData;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // dd($this->reqData);
        $data1 = Produk::latest()->paginate(10);
        return view('components.produklist', [
            'data1'=> $data1
        ]);
    }
}
