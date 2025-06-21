<?php
namespace App\Livewire\Website;
use Livewire\Component;

class PrivacyPolicyPage extends Component
{
    public function render()
    {
        $title =   __('Privacy Policy - Lucratif LLC');
        return view('livewire.website.privacy-policy-page')->title($title);
    }
}
