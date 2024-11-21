<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {

        $provincesJson = file_get_contents(public_path('assets/json/province.json'));
        $provinces = json_decode($provincesJson, true);
        return view('livewire.pages.home', compact('provinces'));
    }
}
