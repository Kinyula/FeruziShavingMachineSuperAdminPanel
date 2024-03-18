<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class SuperAdminPanelLayout extends Component
{
    public function render()
    {
        return view('livewire.super-admin-panel-layout', ['profileImage' => User::where('id', auth()->user()->id)->first() ]);
    }
}
