<?php

namespace App\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public $activeRoute;

    public function mount()
    {
        // Xác định route hiện tại
        $this->activeRoute = request()->route()->getName();
    }

    public function navigateTo($route)
    {
        // Điều hướng đến route cụ thể
        return redirect()->route($route);
    }

    public function render()
    {
        return view('livewire.navigation');
    }
}
