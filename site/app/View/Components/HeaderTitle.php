<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeaderTitle extends Component
{
    public $primaryTitle;
    public $secondaryTitle;
    public $spot;

    public function __construct($primaryTitle, $secondaryTitle, $spot)
    {
        $this->primaryTitle = $primaryTitle;
        $this->secondaryTitle = $secondaryTitle;
        $this->spot = $spot;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.header-title');
    }
}
