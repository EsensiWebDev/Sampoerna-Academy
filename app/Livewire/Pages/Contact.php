<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        $provincesJson = file_get_contents(public_path('assets/json/province.json'));
        $provinces = json_decode($provincesJson, true);
        return view('livewire.pages.contact', compact('provinces'));
    }
}
