<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $message;
    public $background;
    public $color;
    
    public function __construct($message, $background, $color)
    {
        $this->message = $message;
        $this->background = $background;
        $this->color = $color;
    }

    public function render()
    {
        return view('components.button');
    }
}
