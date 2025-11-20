<?php

namespace App\View\Components\notifies;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Notice extends Component
{
    /**
     * Create a new component instance.
     */
    public $type ;
    public $style ;
    public function __construct($type,$style)
    {
        //
        $this->type = $type;
        $this->style = $style;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.notifies.notice');
    }
}
