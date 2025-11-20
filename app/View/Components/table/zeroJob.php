<?php

namespace App\View\Components\table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class zeroJob extends Component
{
    /**
     * Create a new component instance.
     */
    public $jobs;
    public function __construct($jobs)
    {
        //
        $this->jobs = $jobs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.zero-job');
    }
}
