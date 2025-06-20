<?php
namespace App\Livewire\Website;
use Livewire\Component;

class DisclaimerPage extends Component
{
    public function render()
    {
        $title =   __('Disclaimer - Lucratif LLC');
        return view('livewire.website.disclaimer-page')->title($title);
    }
}
