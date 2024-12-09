<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $pageTitle;

    public function __construct($pageTitle = 'Beranda')
    {
        $this->pageTitle = $pageTitle;
    }

    public function render()
    {
        return view('components.user.navbar');
    }
}
