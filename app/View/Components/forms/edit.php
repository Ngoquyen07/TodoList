<?php

namespace App\View\Components\forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class edit extends Component
{
    /**
     * Create a new component instance.
     */
    public $job ;
    public function __construct( $job )
    {
        //
        $this->job = $job;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.edit');
    }
}
