<?php

namespace App\Livewire;

use Livewire\Component;

class PageLayout extends Component
{
    public function render()
    {

        $provincesJson = file_get_contents(public_path('assets/json/province.json'));
        $provinces = json_decode($provincesJson, true);
        return view('livewire.page-layout', compact('provinces'));
    }
}
