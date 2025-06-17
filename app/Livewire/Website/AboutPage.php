<?php
namespace App\Livewire\Website;
use Livewire\Component;

class AboutPage extends Component
{
    public function render()
    {
        $title =   __('AboutUS - Company Overview');
        return view('livewire.website.about-page')->title($title);
    }
}
