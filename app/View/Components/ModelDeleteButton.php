<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModelDeleteButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $modelid,
        public string $action,
        public string $type,
    )
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
        return view('components.model-delete-button');
    }
}
