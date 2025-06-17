<?php

namespace App\Livewire\Website;

use Livewire\Component;

class ContactPage extends Component
{
    public function render()
    {
        $title =   __('Contact-US');
        return view('livewire.website.contact-page')->title($title);
    }
}
