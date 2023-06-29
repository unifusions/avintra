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
      
        $sessionId = request()->session()->getId();
        $userIp =  request()->ip();
        $visitor = Visitors::where('ip_address', $userIp)->where('session_id', $sessionId)->first();

        if ($visitor === null)
            Visitors::create([
                'ip_address' => $userIp,
                'session_id' => $sessionId,

            ]);
        else {
            $visitor->counter = $visitor->counter + 1;
            $visitor->save();
        }

        return view('layouts.guest')->with(
            ['app_visitors' => Visitors::count(),]
        );
    }
}
