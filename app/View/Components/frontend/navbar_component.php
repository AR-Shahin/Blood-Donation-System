<?php

namespace App\View\Components\frontend;

use Illuminate\View\Component;

class navbar_component extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $label,
        public string $name,
        public array $data
    )
    { }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.frontend.navbar-component');
    }
}
