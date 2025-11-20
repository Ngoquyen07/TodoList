<?php

namespace App\View\Components\table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tableRow extends Component
{
    /**
     * Create a new component instance.
     */
    public $job;
    public $stt;
    public function __construct($job ,$stt)
    {
        //
        $this->job = $job;
        $this->stt = $stt;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.table-row');
    }
}
