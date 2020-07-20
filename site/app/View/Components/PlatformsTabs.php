<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PlatformsTabs extends Component
{
    public $sectionclass;
    public function __construct($sectionclass)
    {
        $this->sectionclass = $sectionclass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.platforms-tabs');
    }
}
