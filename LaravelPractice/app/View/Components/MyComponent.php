<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MyComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $lable;
    public $title;
    public $type;
    public $name;
    public $placeholder;

    public function __construct($lable, $title, $type, $name, $placeholder)
    {
        $this->lable = $lable;
        $this->title = $title;
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.my-component');
    }
}
