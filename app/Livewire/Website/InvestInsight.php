<?php
namespace App\Livewire\Website;
use Livewire\Component;

class InvestInsight extends Component
{
    public function render()
    {
        $title =   __('Investment Insights - Lucratif LLC');
        return view('livewire.website.invest-insight')->title($title);
    }
}
