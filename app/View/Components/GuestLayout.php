<?php

namespace App\View\Components;

use App\Models\Visitors;
use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        
        return view('layouts.guest')->with(
            ['app_visitors' => Visitors::count(),]
        );
    }
}
